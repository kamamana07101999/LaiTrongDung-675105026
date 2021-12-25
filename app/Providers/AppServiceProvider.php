<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
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
        Gate::define('admin',function($user){
            if($user->name=='admin'){
                return true;
            }
            return false;
        });
        Gate::define('Sinh vien',function($user){
            if($user->role_id=='2'){
                return true;
            }
            return false;
        });
        Gate::define('giangvien1',function($user){
            if($user->role_id=='3'){
                return true;
            }
            return false;
        });
        Gate::define('thuky',function($user){
            if($user->role_id=='4'){
                return true;
            }
            return false;
        });
    }
}
