<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FilamentLoginCustomizationProvider extends ServiceProvider
{
    public function boot()
    {
        // Kustomisasi view langsung dengan mempublikasikan view (tidak menggunakan registerAuthView)
    }
}
