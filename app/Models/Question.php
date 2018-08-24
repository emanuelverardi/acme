<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question_text', 'answer_structure_id', 'answer_type_metadata_id', 'is_mandatory'
    ];

    /**
     * Get the answer structure record associated with the question.
     */
    public function answerStructure()
    {
        return $this->hasOne('App\Models\AnswerStructures', 'id', 'answer_structure_id');
    }

    /**
     * Get the answer structure record associated with the question.
     */
    public function answerTypeMetadata()
    {
        return $this->hasOne('App\Models\AnswerTypeMetadata', 'id', 'answer_type_metadata_id');
    }
}
