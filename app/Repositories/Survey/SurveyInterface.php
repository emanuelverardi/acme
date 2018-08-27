<?php

namespace App\Repositories\Survey;

/**
 * Defining interfaces for Answer repository
 */
interface SurveyInterface
{

    /**
     * Get total Answer for dashboard
     * @return mixed
     */
    public function getTotal();

}
