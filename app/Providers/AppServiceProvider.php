<?php

namespace App\Providers;

use Shopify\Context;
use Shopify\Auth\FileSessionStorage;
use Illuminate\Database\Eloquent\Model;
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
        Model::unguard();

//        Context::initialize(
//            'SHOPIFY_API_KEY',
//            'SHOPIFY_API_SECRET',
//            'SHOPIFY_APP_SCOPES',
//            "https://wb-store.ferasdev.com",
//            new FileSessionStorage('/tmp/php_sessions'),
//            '2023-04',
//            true,
//            false,
//            null,
//            "",
//            null,
//            ["ferasdev.com"]
//        );
    }
}
