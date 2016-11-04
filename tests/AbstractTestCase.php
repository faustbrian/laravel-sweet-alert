<?php

namespace BrianFaust\Tests\SweetFlash;

use GrahamCampbell\TestBench\AbstractPackageTestCase;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    protected function getServiceProviderClass($app)
    {
        return \BrianFaust\SweetFlash\ServiceProvider::class;
    }
}
