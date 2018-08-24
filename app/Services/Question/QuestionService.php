<?php

namespace App\Services\Question;

use App\Models\AnswerTypeMetadata;
use App\Models\AnswerTypeMetadataItem;
use App\Repositories\Question\QuestionInterface;
use Illuminate\Http\Request;
use Carbon\Carbon;


class QuestionService
{
    // Question repository reference
    protected $questionRepo;

    /**
     * Initializing the repository reference with interface
     *
     * @param questionInterface $questinRepo
     */
    public function __construct(QuestionInterface $questinRepo)
    {
        $this->questionRepo = $questinRepo;
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

        /**
         * This can be Optimized. I did this whay because im running late.
         */
        $arr_metadata = $request->get('answer_metadata');
        if(!empty($arr_metadata) && $arr_metadata[0] != null){

            $am = AnswerTypeMetadata::firstOrCreate(['id' => $request->get('answer_type_metadata_id')], ['name' =>
                $request->get('question_text')]);
            $am->save();

            // Updates the request with the new answer_type_metadata_id
            $request->merge(['answer_type_metadata_id' => $am->id]);

            // Add Answer Type Metadata Items
            $arrItems = [];
            foreach($arr_metadata as $val){
                $arrItems[] = ['answer_type_metadata_id' => $am->id, 'value' => $val, 'created_at' => Carbon::now()];
            }

            AnswerTypeMetadataItem::where('answer_type_metadata_id', $am->id)->delete();
            AnswerTypeMetadataItem::insert($arrItems);
        }

        //Call the Question Repo and Create
        return $this->questionRepo->updateOrCreate($request);
    }

    /**
     * Creating a new question
     * @param Request $request
     * @return mixed
     */
    public function delete($questionId){
        return $this->questionRepo->delete($questionId);
    }

}
