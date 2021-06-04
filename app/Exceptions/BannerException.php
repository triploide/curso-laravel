<?php

namespace App\Exceptions;

class BannerException extends \Exception
{
    // public function __construct($message='', $code=0)
    // {
    //     $this->title = '<h1>' . $message . '</h1>';

    //     parent::__construct($message, $code);
    // }

    public function report()
    {
        \Log::debug('Error: BannerException');
    }

    public function render($request)
    {
        return response()->view('errors.banner-error');
    }
}
