<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::table('users', function (Blueprint $table) {
      $table->string('username')->nullable()->unique()->after('id');
      $table->char('username_unique_id', 14)->nullable()->after('username');
      $table->string('image')->nullable()->after('email_verified_at');
      $table->text('bio')->nullable()->after('image');
      $table->string('timezone', 64)->nullable()->default(config('app.timezone'));
    });

    $users = DB::table('users')->get();
    foreach ($users as $user) {
      $base = Str::lower(str_replace(' ', '', $user->name));
      $hexRand = bin2hex(random_bytes(7));

      DB::table('users')
        ->where('id', $user->id)
        ->update([
          'username' => $base,
          'username_unique_id' => $hexRand,
        ]);
    }

    Schema::table('users', function (Blueprint $table) {
      $table->string('username')->nullable(false)->change();
      $table->char('username_unique_id', 14)->nullable(false)->unique()->change();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    if (DB::connection() instanceof \Illuminate\Database\SQLiteConnection) {
      Schema::table('users', function (Blueprint $table) {
        $table->dropUnique(['username']);
        $table->dropUnique(['username_unique_id']);
      });
      Schema::table('users', function (Blueprint $table) {
        $table->dropColumn(['username', 'username_unique_id', 'image', 'bio', 'timezone']);
      });
    } else {
      Schema::table('users', function (Blueprint $table) {
        $table->dropUnique(['username']);
        $table->dropUnique(['username_unique_id']);
        $table->dropColumn(['username', 'username_unique_id', 'image', 'bio', 'timezone']);
      });
    }
  }
};
