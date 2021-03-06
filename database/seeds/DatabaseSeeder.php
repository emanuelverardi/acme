<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(AnswerStructuresTableSeeder::class);
        $this->call(AnswerTypeMetadataTableSeeder::class);
        $this->call(AnswerTypeMetadataItemsTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(SurveyTableSeeder::class);
        $this->call(UserSurveyTableSeeder::class);
        $this->call(SurveyQuestionTableSeeder::class);
        $this->call(AnswerTableSeeder::class);

    }
}
