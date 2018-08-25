<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AnswerTypeMetadataItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answer_type_metadata_items')->insert([
            [
                'id' => 1,
                'answer_type_metadata_id' => 1,
                'value' => 'single',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'answer_type_metadata_id' => 1,
                'value' => 'married',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'answer_type_metadata_id' => 1,
                'value' => 'in a relationship',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'answer_type_metadata_id' => 1,
                'value' => 'prefer not to disclose',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'answer_type_metadata_id' => 2,
                'value' => 'yes',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'answer_type_metadata_id' => 2,
                'value' => 'no',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 7,
                'answer_type_metadata_id' => 3,
                'value' => 'Male',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'answer_type_metadata_id' => 3,
                'value' => 'Female',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'answer_type_metadata_id' => 4,
                'value' => 'irish',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'answer_type_metadata_id' => 4,
                'value' => 'british',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 11,
                'answer_type_metadata_id' => 4,
                'value' => 'spanish',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'answer_type_metadata_id' => 4,
                'value' => 'french',
                'created_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'answer_type_metadata_id' => 4,
                'value' => 'other',
                'created_at' => Carbon::now()
            ],
        ]);
    }
}
