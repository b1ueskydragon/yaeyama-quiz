<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Log;

class ValidatorServiceProvider extends ServiceProvider
{
  /**
   * Register services.
   *
   * @return void
   */
  public function register()
  {
    //
  }

  /**
   * Bootstrap services.
   *
   * @return void
   */
  public function boot()
  {
    //現在登録されているパスワードと一致しているか
    Validator::extend('dbpass', function ($attribute, $value, $parameters, $validator) {
      $user = Auth::user();
      Log::debug('現在のPW：' . $user->password);
      Log::debug('入力したPW：' . $value);
      return Hash::check($value, $user->password);
    });
    //現在登録されているメールアドレスと一致しているか
    Validator::extend('dbemail', function ($attribute, $value, $parameters, $validator) {
      $user = Auth::user();
      Log::debug('現在のEmail：' . $user->email);
      Log::debug('入力したEmail：' . $value);
      return $user->email === $value ? true : false;
    });
  }
}
