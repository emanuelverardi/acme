<?php

namespace App\Repositories\Question;

use Illuminate\Database\Eloquent\Model;


class QuestionRepository implements QuestionInterface
{
    // User model referencec
    protected $questionModel;

    /**
     * Assigning $questionModel to injected model
     *
     * @param Model $question
     * @return QuestionRepository
     */
    public function __construct(Model $question)
    {
        $this->questionModel = $question;
    }

    /**
     * Returns the Question attributes
     *
     * @param mixed $questionId
     * @return Model
     */
    public function getQuestionById($questionId)
    {
        if ($questionId == 1) {
            return 'How old are you?';
        } else if ($questionId == 2) {
            return 'What day is today?';
        } else {
            return 'No question found';
        }
    }
}
