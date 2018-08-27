<?php

namespace App\Services\Question;

use App\Models\AnswerTypeMetadata;
use App\Models\AnswerTypeMetadataItem;
use App\Repositories\AnswerTypeMetadata\AnswerTypeMetadataInterface;
use App\Repositories\Question\QuestionInterface;
use Illuminate\Http\Request;
use Carbon\Carbon;


class QuestionService
{
    // Question repository reference
    protected $questionRepo;
    protected $answerTypeMetadataRepo;

    /**
     * Initializing the repository reference with interface
     *
     * @param questionInterface $questinRepo
     */
    public function __construct(QuestionInterface $questionRepo, AnswerTypeMetadataInterface $answerTypeMetadataRepo)
    {
        $this->questionRepo = $questionRepo;
        $this->answerTypeMetadataRepo = $answerTypeMetadataRepo;
    }

    /**
     * Method to get question attributes
     *
     * @param mixed $question
     * @return string
     */
    public function list()
    {
        return $this->questionRepo->list();
    }

    /**
     * Method to get question attributes
     *
     * @param mixed $question
     * @return string
     */
    public function getQuestion($questionId)
    {
        return $this->questionRepo->getQuestionById($questionId);
    }

    /**
     * Creating a new question
     * @param Request $request
     * @return mixed
     */
    public function updateOrCreate(Request $request){

        $request = $this->updateOrCreateAnswerTypeMetadata($request);

        //Call the Question Repo and Create
        return $this->questionRepo->updateOrCreate($request);
    }

    /**
     * Updates or create AnswerTypeMetadata
     * @param Request $request
     * @return Request
     */
    public function updateOrCreateAnswerTypeMetadata(Request $request){

        $arr_metadata = $request->get('answer_metadata');
        if(!empty($arr_metadata) && $arr_metadata[0] != null){

            // Creates the Answer Type Metadata and set the ID in the request.
            $atm = $this->answerTypeMetadataRepo->updateOrCreate( $request );

            //Remove the old items
            $atm->items()->delete();

            // Add Answer Type Metadata Items
            $arrItems = [];
            foreach($arr_metadata as $val){
                $arrItems[] = ['answer_type_metadata_id' => $atm->id, 'value' => $val, 'created_at' => Carbon::now()];
            }

            $atm->items()->insert($arrItems);

            // Updates the request with the new answer_type_metadata_id
            $request->merge(['answer_type_metadata_id' => $atm->id]);
        }

        return $request;
    }

    /**
     * Creating a new question
     * @param Request $request
     * @return mixed
     */
    public function delete($questionId){

        $questionObj = $this->questionRepo->getQuestionById($questionId);

        if(!$questionObj->hasAnyAnswer()){
            return $this->questionRepo->delete($questionId);
        }else{
            return ['status' => false, 'message' => 'This Question cannot be deleted because it have answers.'];
        }

    }

}
