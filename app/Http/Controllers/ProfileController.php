<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Helpers\TimezoneHelper;

class ProfileController extends Controller
{

  /**
   * Display the user's profile form.
   */
  public function edit(Request $request): View
  {

    $timezones = TimezoneHelper::getTimeZone();

    return view('profile.edit', [
      'user' => $request->user(),
      'timezones' => $timezones,
    ]);
  }

  /**
   * Update the user's profile information.
   */
  public function update(ProfileUpdateRequest $request): RedirectResponse
  {
    $data = $request->validated();

    // $image = $data['image'] ?? null;
    // if ($image) {
    //   $data['image'] = $image->store('avatars', 'public');
    // } else {
    //   unset($data['image']);
    // }

    $user = $request->user();


    $user->fill($data);

    if ($user->isDirty('email')) {
      $user->email_verified_at = null;
    }

    $user->save();

    if ($request->hasFile('image')) {
      $user->clearMediaCollection('avatar');
      $user->addMediaFromRequest('image')
        ->toMediaCollection('avatar');
    }

    return Redirect::route('profile.edit')->with('status', 'success-update');
  }

  /**
   * Delete the user's account.
   */
  public function destroy(Request $request): RedirectResponse
  {
    $request->validateWithBag('userDeletion', [
      'password' => ['required', 'current_password'],
    ]);

    $user = $request->user();

    Auth::logout();

    $user->delete();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return Redirect::to('/')->with('status', 'success-delete');
  }
}
