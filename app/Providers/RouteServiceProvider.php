<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to the "home" route for your application.
     *
     * This is used by Laravel authentication to redirect users after login.
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, etc.
     */
    public function boot(): void
    {
        // Optional: define global route model binding if needed
        // Example: include soft deleted products in route model binding
        // Route::model('product', \App\Models\Product::class, function () {
        //     return \App\Models\Product::withTrashed();
        // });

        $this->routes(function () {

            // --------------------------
            // Web Routes
            // --------------------------
            Route::middleware('web') // session, CSRF, cookies
                ->group(base_path('routes/web.php'));

            // --------------------------
            // API Routes
            // --------------------------
            Route::prefix('api')       // all api routes are prefixed with /api
                
                ->group(base_path('routes/api.php'));
        });
    }
}
