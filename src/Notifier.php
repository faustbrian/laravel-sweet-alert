<?php

/*
 * This file is part of Laravel Sweet Flash.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace BrianFaust\SweetFlash;

use Illuminate\Session\Store;

class Notifier
{
    private $session;

    private $config = [
        'allowOutsideClick' => true,
        'showConfirmButton' => false,
        'timer'             => 1800,
    ];

    private $callback;

    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function message($text, $type = 'info', $title = '')
    {
        return $this->config('text', $text)
                    ->config('type', $type)
                    ->config('title', $title)
                    ->commit();
    }

    public function success($text, $title = '')
    {
        return $this->message($text, 'success', $title);
    }

    public function info($text, $title = '')
    {
        return $this->message($text, 'info', $title);
    }

    public function warning($text, $title = '')
    {
        return $this->message($text, 'warning', $title);
    }

    public function error($text, $title = '')
    {
        return $this->message($text, 'error', $title);
    }

    public function autoclose($milliseconds = 2000)
    {
        return $this->config('timer', $milliseconds)
                    ->commit();
    }

    public function persistent($buttonText = 'OK')
    {
        return $this->config('confirmButtonText', $buttonText)
                    ->config('showConfirmButton', true)
                    ->config('allowOutsideClick', false)
                    ->config('timer', 'null')
                    ->commit();
    }

    public function callback($value)
    {
        $this->callback = $value;

        return $this;
    }

    public function config($key, $value = null)
    {
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->config($k, $v);
            }
        } else {
            $this->config[$key] = $value;
        }

        return $this;
    }

    public function commit()
    {
        foreach ($this->config as $key => $value) {
            $this->session->flash("sweet_flash.{$key}", $value);
        }

        $this->session->flash('sweet_flash.flash', json_encode($this->config));

        if (!empty($this->callback)) {
            $this->session->flash('sweet_flash.callback', $this->callback);
        }

        return $this;
    }

    public function custom($config)
    {
        return $this->config($config)
                    ->commit();
    }
}
