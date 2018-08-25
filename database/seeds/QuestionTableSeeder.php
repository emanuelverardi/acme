<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'id' => 1,
                'question_text' => 'What is your name?',
                'answer_structure_id' => 2,
                'answer_type_metadata_id' => null,
                'is_mandatory' => 1,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'question_text' => 'When were you born?',
                'answer_structure_id' => 3,
                'answer_type_metadata_id' => null,
                'is_mandatory' => 0,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'question_text' => 'Marital Status',
                'answer_structure_id' => 5,
                'answer_type_metadata_id' => 1,
                'is_mandatory' => 0,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'question_text' => 'Do you smoke?',
                'answer_structure_id' => 4,
                'answer_type_metadata_id' => 2,
                'is_mandatory' => 0,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'question_text' => 'Gender?',
                'answer_structure_id' => 4,
                'answer_type_metadata_id' => 3,
                'is_mandatory' => 0,
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'question_text' => 'Nationality',
                'answer_structure_id' => 4,
                'answer_type_metadata_id' => 4,
                'is_mandatory' => 0,
                'created_at' => Carbon::now()
            ],

        ]);
    }
}
