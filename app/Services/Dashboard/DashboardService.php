<?php

namespace App\Services\Dashboard;

use App\Repositories\AnswerTypeMetadata\AnswerTypeMetadataInterface;
use App\Repositories\Question\QuestionInterface;
use App\Repositories\Answer\AnswerInterface;
use App\Repositories\Survey\SurveyInterface;

class DashboardService
{
    protected $questionRepo;
    protected $answerTypeMetadataRepo;
    protected $answerRepo;
    protected $surveyRepo;

    /**
     * DashboardService constructor.
     * @param QuestionInterface $questionRepo
     * @param AnswerTypeMetadataInterface $answerTypeMetadataRepo
     * @param AnswerInterface $answerRepo
     * @param SurveyInterface $surveyRepo
     */
    public function __construct(
        QuestionInterface $questionRepo,
        AnswerTypeMetadataInterface $answerTypeMetadataRepo,
        AnswerInterface $answerRepo,
        SurveyInterface $surveyRepo
    )
    {
        $this->questionRepo = $questionRepo;
        $this->answerTypeMetadataRepo = $answerTypeMetadataRepo;
        $this->answerRepo = $answerRepo;
        $this->surveyRepo = $surveyRepo;
    }


    /**
     * Get Dashboard totals
     * @return array
     */
    public function getTotals()
    {
        $totals = [
            'totalQuestions' => $this->questionRepo->getTotalQuestions(),
            'totalAnswerTypeMetadata' => $this->answerTypeMetadataRepo->getTotal(),
            'totalAnswer' => $this->answerRepo->getTotal(),
            'totalSurvey' => $this->surveyRepo->getTotal()
        ];

        return $totals;
    }
}
