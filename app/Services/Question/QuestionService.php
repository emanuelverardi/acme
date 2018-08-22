<?php

namespace App\Services\Question;

use App\Repositories\Question\QuestionInterface;


class QuestionService
{
    // Question repository reference
    protected $questionRepo;

    /**
     * Initializing the repository reference with interface
     *
     * @param questionInterface $questinRepo
     */
    public function __construct(QuestionInterface $questinRepo)
    {
        $this->questionRepo = $questinRepo;
    }

    /**
     * Method to get question attributestionId
     *
     * @param mixed $question
     * @return string
     */
    public function getQuestion($questionId)
    {
        return $this->questionRepo->getQuestionById($questionId);
    }

}
