<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SurveyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('surveys')->insert([
            [
                'id' => 1,
                'name' => 'Generic User Survey',
                'description' => 'Normal User',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'Woman Survey',
                'description' => 'Just for Women',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
