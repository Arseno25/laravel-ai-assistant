<?php

namespace Arseno25\LaravelAiAssistant\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Arseno25\LaravelAiAssistant\LaravelAiAssistant
 */
class LaravelAiAssistant extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Arseno25\LaravelAiAssistant\LaravelAiAssistant::class;
    }
}
