<?php

namespace App\Facades;

use App\Services\TemplateService;
use Illuminate\Support\Facades\Facade;

class Template extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return TemplateService::class;
    }
}
