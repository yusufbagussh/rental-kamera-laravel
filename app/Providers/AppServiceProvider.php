<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;

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
        //Menggunakan template boostrap untuk halaman
        Paginator::useBootstrap();
        //Membuat aturan authorization superadmin yaitu id role bukan 1
        Gate::define('superadmin', function (User $user) {
            return $user->user_role === 1;
        });
    }
}
