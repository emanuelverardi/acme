<?php

namespace App\Repositories\Question;


use phpDocumentor\Reflection\Types\Integer;
use Illuminate\Http\Request;

/**
 * Defining interfaces for Question repository
 */
interface QuestionInterface
{

    /**
     * List all questions
     */
    public function list();

    /**
     * Interface to get question attributes by id
     * @param integer $questionId
     */
    public function getQuestionById($questionId);

    /**
     * Update or Create a question
     * @param array $data
     * @return mixed
     */
    public function updateOrCreate(Request $request);

    /**
     * Deletes a question
     * @param array $data
     * @return mixed
     */
    public function delete($questionId);

    /**
     * Get the
     * @return mixed
     */
    public function getTotalQuestions();

}
