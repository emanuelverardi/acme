<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnswerTypeMetadata extends Model
{
    protected $table = 'answer_type_metadata';

    protected $fillable = [
        'id', 'name'
    ];

    /**
     * Get the answer structure record associated with the question.
     */
    public function items()
    {
        return $this->hasMany('App\Models\AnswerTypeMetadataItem', 'answer_type_metadata_id', 'id');
    }
}
