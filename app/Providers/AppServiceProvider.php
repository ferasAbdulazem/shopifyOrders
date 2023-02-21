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

        Context::initialize(
            $_ENV['SHOPIFY_API_KEY'],
            $_ENV['SHOPIFY_API_SECRET'],
            $_ENV['SHOPIFY_APP_SCOPES'],
            "https://wb-store.ferasdev.com",
            new FileSessionStorage('/tmp/php_sessions'),
            $_ENV['SHOPIFY_API_VERSION'],
            true,
            false,
            null,
            "",
            null,
            ["ferasdev.com"]
        );
    }
}
