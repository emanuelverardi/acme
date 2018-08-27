<?php

namespace App\Repositories\Answer;

use Illuminate\Database\Eloquent\Model;

class AnswerRepository implements AnswerInterface
{
    // Model reference
    protected $model;

    /**
     * AnswerRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * GetTotals
     * @return mixed
     */
    public function getTotal()
    {
        return $this->model->count();
    }

}
