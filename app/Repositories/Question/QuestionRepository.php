<?php

namespace App\Repositories\Question;

use http\Exception\InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class QuestionRepository implements QuestionInterface
{
    // Question model reference
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
    public function list()
    {
        return $this->questionModel::with(['answerStructure', 'answerTypeMetadata'])->get();
    }

    /**
     * Returns the Question attributes
     *
     * @param mixed $questionId
     * @return Model
     */
    public function getQuestionById($questionId)
    {
        if(empty($questionId)){
            throw new InvalidArgumentException("Invalid parameter");
        }

        return $this->questionModel::find($questionId);
    }

    /**
     * Update or Create a new Question
     *
     * @param array $data
     * @return mixed
     */
    public function updateOrCreate(Request $request)
    {
        $data = $request->only($this->questionModel->fillable);
        $id = $request->get('id');

        return $this->questionModel->updateOrCreate(['id' => $id], $data);
    }

    /**
     * Delete a Question
     *
     * @param array $data
     * @return mixed
     */
    public function delete($questionId)
    {
        return $this->questionModel->destroy($questionId);
    }

    /**
     * Get Total questions
     * @return mixed
     */
    public function getTotalQuestions()
    {
        return $this->questionModel->count();
    }

}
