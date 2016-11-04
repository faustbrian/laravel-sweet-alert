<?php

namespace BrianFaust\Tests\SweetFlash\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\SweetFlash\AbstractTestCase;
use BrianFaust\SweetFlash\Facades\SweetFlash;
use BrianFaust\SweetFlash\Notifier;

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
