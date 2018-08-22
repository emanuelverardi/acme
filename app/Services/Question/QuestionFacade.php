<?php

namespace App\Services\Question;

use \Illuminate\Support\Facades\Facade;

/**
 * Facade for question service
 */
class QuestionFacade extends Facade
{
    /**
     * Returning service name
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'App\Services\Question\QuestionService';
    }
}
