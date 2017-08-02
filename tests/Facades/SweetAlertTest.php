<?php

/*
 * This file is part of Laravel Sweet Alert.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\SweetAlert\Facades;

use BrianFaust\SweetAlert\Notifier;
use BrianFaust\SweetAlert\Facades\SweetAlert;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use BrianFaust\Tests\SweetAlert\AbstractTestCase;

class SweetAlertTest extends AbstractTestCase
{
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'sweet-alert';
    }

    protected function getFacadeClass()
    {
        return SweetAlert::class;
    }

    protected function getFacadeRoot()
    {
        return Notifier::class;
    }
}
