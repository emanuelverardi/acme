<?php

namespace App\Providers;

use App\Repositories\Survey\SurveyRepository;
use Illuminate\Support\ServiceProvider;
use App\Models\Survey;

class SurveyRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Binding User interface
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Survey\SurveyInterface', function ($app) {
            return new SurveyRepository(new Survey());
        });
    }
}
