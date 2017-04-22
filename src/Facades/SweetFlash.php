<?php



declare(strict_types=1);

namespace BrianFaust\SweetFlash\Facades;

use Illuminate\Support\Facades\Facade;

class SweetFlash extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'sweet-flash';
    }
}
