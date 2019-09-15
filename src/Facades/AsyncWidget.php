<?php

namespace Wuwx\LaravelWidgets\Facades;

use Illuminate\Support\Facades\Facade;

class AsyncWidget extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'arrilot.async-widget';
    }
}
