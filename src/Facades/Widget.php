<?php

namespace Wuwx\LaravelWidgets\Facades;

use Illuminate\Support\Facades\Facade;

class Widget extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'arrilot.widget';
    }

    /**
     * Get the widget group object.
     *
     * @param $name
     *
     * @return WidgetGroup
     */
    public static function group($name)
    {
        return app('arrilot.widget-group-collection')->group($name);
    }
}
