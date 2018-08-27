<?php

namespace App\Providers;

use App\Repositories\Answer\AnswerRepository;
use Illuminate\Support\ServiceProvider;
use App\Models\Answer;

class AnswerRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Binding User interface
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Answer\AnswerInterface', function ($app) {
            return new AnswerRepository(new Answer());
        });
    }
}
