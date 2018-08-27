<?php

namespace App\Providers;

use App\Models\AnswerTypeMetadata;
use App\Repositories\AnswerTypeMetadata\AnswerTypeMetadataRepository;
use Illuminate\Support\ServiceProvider;

class AnswerTypeMetadataRepositoryServiceProvider extends ServiceProvider
{
    /**
     * Binding User interface
     */
    public function register()
    {
        $this->app->bind('App\Repositories\AnswerTypeMetadata\AnswerTypeMetadataInterface', function ($app) {
            return new AnswerTypeMetadataRepository(new AnswerTypeMetadata());
        });
    }
}
