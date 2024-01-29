<?php

namespace Inumodules\Settings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Inumodules\Settings\Settings
 */
class Settings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Inumodules\Settings\Settings::class;
    }
}
