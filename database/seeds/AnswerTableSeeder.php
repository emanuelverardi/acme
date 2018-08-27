<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'id' => 1,
                'question_id' => 1,
                'user_survey_id' => 1,
                'answer_type_metadata_item_id' => null,
                'answer_text' => 'Emanuel',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'question_id' => 2,
                'user_survey_id' => 1,
                'answer_type_metadata_item_id' => null,
                'answer_text' => '1981-04-27',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'question_id' => 3,
                'user_survey_id' => 1,
                'answer_type_metadata_item_id' => 1,
                'answer_text' => null,
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
