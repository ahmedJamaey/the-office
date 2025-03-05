<?php

namespace App\Facades;

use App\Services\TemplateService;
use Illuminate\Support\Facades\Facade;

class TemplateFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return TemplateService::class;
    }
}
