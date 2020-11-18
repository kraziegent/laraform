<?php

namespace Kraziegent\Laraform;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Kraziegent\Laraform\Laraform
 */
class LaraformFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laraform';
    }
}
