<?php



if (!function_exists('sweet')) {
    function sweet($message = null)
    {
        $notifier = app('sweet-flash');

        if (!is_null($message)) {
            return $notifier->message($message);
        }

        return $notifier;
    }
}
