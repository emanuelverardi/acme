<?php

namespace App\Repositories\Answer;

use Illuminate\Http\Request;

/**
 * Defining interfaces for Answer repository
 */
interface AnswerInterface
{

    /**
     * Get total Answer for dashboard
     * @return mixed
     */
    public function getTotal();

}
