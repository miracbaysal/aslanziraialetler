<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Communication;
use App\Models\About;


class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Eğer birden fazla view dosyasına göndermek isteseydik:
        View::composer(
            ['layouts.footer', 'app'],
            function ($view) {
            $view->with(
                [
                    'comm' => Communication::first(),
                    'about' => About::first(),
                ]
            );
        });

        // Sadece footer view'ine Communication ve About verisini gönder.
        // View::composer('layouts.footer', function ($view) {
        //     $view->with(
        //         [
        //             'comm' => Communication::first(),
        //             'about' => About::first(),
        //         ]
        //     );
        // });

        
    }
}
