<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        RateLimiter::for('login', function (Request $req) {
            return Limit::perMinute(3)->by($req->input('username'))->response(function (Request $req) {
                return redirect()->route('login')->with('limitUser', 'To Many Request')->withInput();
            });
        });

        RateLimiter::for('global', function (Request $req) {
            return $req->user() ? Limit::perMinute(2000)->by($req->ip()) : Limit::perMinute(500)->by($req->ip());
        });
    }
}
