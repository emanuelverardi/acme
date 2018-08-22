<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('survey_question_id');
            $table->unsignedInteger('answer_type_metadata_item_id');
            $table->timestamps();

            $table->foreign('survey_question_id')->references('id')->on('survey_question');
            $table->foreign('answer_type_metadata_item_id')->references('id')->on('answer_type_metadata_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answers');
    }
}
