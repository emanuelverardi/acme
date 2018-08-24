<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Controller;
use App\Models\AnswerStructures;
use App\Services\Question\QuestionFacade as Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{

    /**
     * Get all questions
     * @return \Illuminatse\Http\JsonResponse
     */
    public function getStructures()
    {

        /**
         * @todo - Create Service and Repository structure for future use
         */
        return response()->json(AnswerStructures::all());
    }

}
