<?php

namespace App\Providers;

use App\Services\Question\QuestionService;
use Illuminate\Support\ServiceProvider;

class QuestionServiceProvider extends ServiceProvider
{
    /**
     * Binding Question service
     */
    public function register()
    {
        $this->app->bind('QuestionService', function ($app) {
            return new QuestionService(
            // Injecting question interface to be used as user repository
                $app->make('App\Repositories\Question\QuestionInterface'));
        });
    }
}
