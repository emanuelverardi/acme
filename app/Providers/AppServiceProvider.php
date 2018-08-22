<?php

namespace App\Providers;

use App\Repositories\Question\QuestionInterface;
use App\Repositories\Question\QuestionRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Binding the Interface with Implementation of Tickets4Sale.
        //$this->app->singleton(QuestionInterface::class, QuestionRepository::class);
    }
}
