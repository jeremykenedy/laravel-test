<?php

use Illuminate\Foundation\Inspiring;
use App\User;
use jeremykenedy\LaravelRoles\Models\Role;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');

Artisan::command('role:add {userId} {roleId}', function(string $userId, string $roleId) {
  $user = User::find($userId);

  if (!$user) {
    $this->comment("There was an error finding user ID $userId");

    return;
  }

  $role = Role::find($roleId);

  if (!$role) {
    $this->comment("There was an error finding role ID $roleId");

    return;
  }

  $user->attachRole($role);

  $this->comment("User ID $userId was given role ID $roleId");
});