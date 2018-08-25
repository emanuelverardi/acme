<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AnswerTypeMetadataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answer_type_metadata')->insert([
            [
                'id' => 1,
                'name' => 'Matrial Status',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'Yes or Not',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'Gender',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'Nationality',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
