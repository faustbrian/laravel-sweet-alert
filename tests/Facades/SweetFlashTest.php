<?php



declare(strict_types=1);

namespace BrianFaust\Tests\SweetFlash\Facades;

use BrianFaust\SweetFlash\Facades\SweetFlash;
use BrianFaust\SweetFlash\Notifier;
use BrianFaust\Tests\SweetFlash\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

class SweetFlashTest extends AbstractTestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'sweet-flash';
    }

    protected function getFacadeClass()
    {
        return SweetFlash::class;
    }

    protected function getFacadeRoot()
    {
        return Notifier::class;
    }
}
