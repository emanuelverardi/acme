<?php

namespace App\Http\Controllers\Api\V1;


use App\Http\Controllers\Controller;
use App\Services\Question\QuestionFacade as Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{

    /**
     * Get all questions
     * @return \Illuminatse\Http\JsonResponse
     */
    public function list()
    {
        // Return in Datatabels formatted json
        return datatables()->of( Question::list() )->toJson();
    }

    /**
     * Get a question by id
     * @param $questionId
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuestionById($questionId)
    {
        $question = Question::getQuestion($questionId);

        if($question){
            $question->answerStructure;
            if($question->answerTypeMetadata){
                $question->answerTypeMetadata->items;
            }
        }

        $status = !empty($question) ? true : false;
        return response()->json(['status' => $status, 'question' => $question ]);
    }

    /**
     * Create a new Question
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateOrCreate(Request $request)
    {
        $question = Question::updateOrCreate($request);
        $status = !empty($question) ? true : false;
        return response()->json(['status' => $status, 'question' => $question ]);
    }

    /**
     * Delete a question
     *
     * @param $questionId
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($questionId)
    {
        $question = Question::delete($questionId);
        $status = !empty($question) ? true : false;
        return response()->json(['status' => $status]);
    }

}
