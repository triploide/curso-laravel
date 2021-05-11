<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    private $genres;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \View::composer('front.partials.header', function ($view) {
            $genres = $this->getGenres();

            $view->with(['genres' => $genres]);
        });

        \View::composer('front.partials.footer', function ($view) {
            $genres = $this->getGenres();

            $view->with(['genres' => $genres]);
        });
    }

    private function getGenres()
    {
        if (!$this->genres) {
            $this->genres = [
                'Acción',
                'Comedia',
                'Drama',
            ];
        }

        return $this->genres;
    }
}
