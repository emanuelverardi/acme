<?php

namespace App\Http\Controllers\ControlPanel;

use App\Services\Question\QuestionFacade as Question;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function getQuestion($questionId=1)
    {
        $userName = Question::getQuestion($questionId);
        echo $userName ?? "maoee";

    }

}
