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

    /**
     * The User that belong to the Question.
     */
    public function survey()
    {
        return $this->belongsToMany('App\Models\Survey', 'survey_question');
    }

    /**
     * The User that belong to the Question.
     */
    public function answer()
    {
        return $this->hasMany('App\Models\Answer', 'question_id');
    }

    public function hasAnyAnswer(){
        return null !== $this->answer()->first();
    }
}
