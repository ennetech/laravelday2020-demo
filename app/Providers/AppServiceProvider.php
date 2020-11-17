<?php

namespace App\Providers;

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
        // Curser binding
        // This could be also in a specific service provider
        $this->app->bind(\App\Logic\Cursers\CurserContract::class, function () {
            $curser = "sardinian"; // Retrieve the current one from config
            switch ($curser) {
                case "sardinian":
                    return new \App\Logic\Cursers\SardininanCurser();
                case "venetian":
                    return new \App\Logic\Cursers\VenetianCurser();
            }
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
