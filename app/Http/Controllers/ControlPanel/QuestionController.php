<?php

namespace App\Http\Controllers\ControlPanel;

use App\Services\Question\QuestionFacade as Question;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function list()
    {
        return  view('controlpanel.list');
    }

}
