<?php

namespace App\Providers;

use App\Repositories\Question\QuestionInterface;
use App\Repositories\Question\QuestionRepository;
use Illuminate\Support\ServiceProvider;
use App\Models\Question;

class QuestionRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Binding User interface
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Question\QuestionInterface', function ($app) {
            return new QuestionRepository(new Question());
        });
    }
}
