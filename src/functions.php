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

if (!function_exists('sweet')) {
    function sweet($message = null)
    {
        $notifier = app('sweet-alert');

        if (!is_null($message)) {
            return $notifier->message($message);
        }

        return $notifier;
    }
}
