<?php

namespace Jiannei\LaravelOptions\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static bool has($key)
 * @method static mixed get($key, $default = null)
 * @method static void set($key, $value = null)
 * @method static bool remove($key)
 *
 * @see \Jiannei\LaravelOptions\Option
 */
class Option extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Jiannei\LaravelOptions\Option::class;
    }
}