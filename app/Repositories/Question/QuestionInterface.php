<?php

namespace App\Repositories\Question;


/**
 * Defining interfaces for Question repository
 */
interface QuestionInterface
{

    /**
     * Interface to get question attributes by id
     * @param integer $questionId
     */
    public function getQuestionById($questionId);

}
