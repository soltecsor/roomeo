<?php

namespace App\Providers;
use App\User;
use Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{   

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.*', function($view) {  
            if(Auth::user() != null){ 
            $user = Auth::user();
      
            $avatar = User::find($user->id);       
            $view->with('avatar', $avatar->avatar);
            }
        });
    }
}
