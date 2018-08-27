<?php

namespace App\Repositories\AnswerTypeMetadata;

use http\Exception\InvalidArgumentException;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class AnswerTypeMetadataRepository implements AnswerTypeMetadataInterface
{
    // Model reference
    protected $model;

    /**
     * AnswerTypeMetadataRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Update or Create
     *
     * @param array $data
     * @return mixed
     */
    public function updateOrCreate(Request $request)
    {
        return $this->model->firstOrCreate(
            ['id' => $request->get('answer_type_metadata_id')],
            ['name' => $request->get('question_text')]);
    }

    /**
     * Delete
     *
     * @param array $data
     * @return mixed
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
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
