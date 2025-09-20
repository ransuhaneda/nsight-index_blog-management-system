<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
{
  /**
   * Determine if the user is authorized to make this request.
   */
  public function authorize(): bool
  {
    return true;
  }

  /**
   * Get the validation rules that apply to the request.
   *
   * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
   */
  public function rules(): array
  {

    $userTimezone = auth()->user()->timezone ?? config('app.timezone');

    return [
      'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp', 'max:2048'],
      'title' => 'required',
      'content' => 'required',
      'category_id' => ['required', 'exists:categories,id'],
      'published_at_local' => [
        'nullable',
        'date_format:Y-m-d\TH:i',
        'after_or_equal:' . now()->setTimezone($userTimezone)->format('Y-m-d\TH:i'),
      ]
    ];
  }

  protected function prepareForValidation(): void
  {
    if ($this->filled('published_at_local')) {
      $userTimezone = auth()->user()->timezone ?? 'UTC';

      $utcDateTime = Carbon::createFromFormat(
        'Y-m-d\TH:i',
        $this->published_at_local,
        $userTimezone
      )->setTimezone('UTC');

      $this->merge([
        'published_at' => $utcDateTime->format('Y-m-d H:i:s'),
      ]);
    }
  }

  public function messages(): array
  {
    return [
      'published_at_local.date_format' => 'The published at field must be a valid date and time.',
      'published_at_local.after_or_equal' => 'The publication date must be set to a future date and time.',
    ];
  }
}
