<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AnswerStructures extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answer_structures')->insert([
            [
                'id' => 1,
                'structure' => 'number',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'structure' => 'text',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'structure' => 'date',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'structure' => 'radio',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'structure' => 'drop-down',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
