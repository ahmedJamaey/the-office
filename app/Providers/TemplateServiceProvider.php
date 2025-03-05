<?php

namespace App\Providers;

use App\Services\TemplateService;
use Illuminate\Support\ServiceProvider;

class TemplateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // انا استخدمت بايند لان التيمبلتس في كل ريكوست ممكن تكون متغيره
        $this->app->bind(TemplateService::class, function ($app) {
            return new TemplateService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
