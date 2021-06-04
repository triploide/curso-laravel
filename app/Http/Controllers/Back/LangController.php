<?php

namespace App\Http\Controllers\Back;

use App\Exceptions\BannerException;
use App\Http\Controllers\Controller;
use App\Http\Requests\MovieRequest;
use App\Jobs\TestJob;
use App\Models\Genre;
use App\Models\Movie;

class LangController extends Controller
{
    public function toggle()
    {
        $lang = \App::isLocale('es') ? 'en' : 'es';

        session()->put('lang', $lang);

        return redirect()->back();

        dd('todo bien');
    }
}
