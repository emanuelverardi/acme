<?php

use Illuminate\Database\Seeder;


class UserSurveyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_survey')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'survey_id' => 1
            ],
            [
                'id' => 2,
                'user_id' => 2,
                'survey_id' => 2
            ],
        ]);
    }
}
