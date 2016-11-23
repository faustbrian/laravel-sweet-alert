<?php

/*
 * This file is part of Laravel Sweet Flash.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\SweetFlash\Facades;

use Illuminate\Support\Facades\Facade;

class SweetFlash extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'sweet-flash';
    }
}
