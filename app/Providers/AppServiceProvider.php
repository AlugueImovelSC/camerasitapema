<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config([
            'mail.host' => setting()->mail_host,
            'mail.port' => setting()->mail_port,
            'mail.from.name' => setting()->site_name,
            'mail.from.address' => setting()->mail_user,
            'mail.username' => setting()->mail_user,
            'mail.password' => setting()->mail_password,
        ]);
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
