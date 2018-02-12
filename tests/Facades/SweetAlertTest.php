<?php

declare(strict_types=1);

/*
 * This file is part of Laravel Sweet Alert.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Tests\SweetAlert\Facades;

use BrianFaust\SweetAlert\Facades\SweetAlert;
use BrianFaust\SweetAlert\Notifier;
use BrianFaust\Tests\SweetAlert\AbstractTestCase;
use GrahamCampbell\TestBenchCore\FacadeTrait;

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
