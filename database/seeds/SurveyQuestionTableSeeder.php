<?php

use Illuminate\Database\Seeder;

class SurveyQuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('survey_question')->insert([
            [
                'id' => 1,
                'survey_id' => 1,
                'question_id' => 1
            ],
            [
                'id' => 2,
                'survey_id' => 1,
                'question_id' => 2
            ],
            [
                'id' => 3,
                'survey_id' => 1,
                'question_id' => 3
            ],
            [
                'id' => 4,
                'survey_id' => 1,
                'question_id' => 4
            ],
            [
                'id' => 5,
                'survey_id' => 1,
                'question_id' => 5
            ],
            [
                'id' => 6,
                'survey_id' => 1,
                'question_id' => 6
            ],

            [
                'id' => 7,
                'survey_id' => 2,
                'question_id' => 1
            ],
            [
                'id' => 8,
                'survey_id' => 2,
                'question_id' => 2
            ],
            [
                'id' => 9,
                'survey_id' => 2,
                'question_id' => 3
            ],
            [
                'id' => 10,
                'survey_id' => 2,
                'question_id' => 4
            ],
            [
                'id' => 11,
                'survey_id' => 2,
                'question_id' => 5
            ],
            [
                'id' => 12,
                'survey_id' => 2,
                'question_id' => 6
            ],
        ]);
    }
}
