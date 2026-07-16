<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\MedicalUser;
use App\Models\PortfolioUser;
use App\Models\AdminController;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Register the view composer to share user data with all views
        View::composer('*', function ($view) {
            // Get the user from the session (if available)
            $tailoruser = session()->get('id') ? User::find(session()->get('id')) : null;
            // Share the user with all views
            $view->with('tailoruser', $tailoruser);
        });

        // Admin-specific data sharing
    View::composer('*', function ($view) {
        $tailoradmindata = session()->get('admin_id') ? User::find(session()->get('admin_id')) : null;
        $view->with('tailoradmindata', $tailoradmindata);
    });

          // Medical Admin data sharing
    View::composer('*', function ($view) {
        $admindata = session()->get('id') ? MedicalUser::find(session()->get('id')) : null;
        $view->with('admindata', $admindata);
    });

    //portfolio User data
       View::composer('*', function ($view) {
        $user = session()->get('id') ? PortfolioUser::find(session()->get('id')) : null;
        $view->with('user', $user);
    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
