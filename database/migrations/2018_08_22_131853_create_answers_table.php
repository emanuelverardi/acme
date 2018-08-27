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
            $table->unsignedInteger('question_id');
            $table->unsignedInteger('user_survey_id');
            $table->unsignedInteger('answer_type_metadata_item_id')->nullable();
            $table->text('answer_text')->nullable();
            $table->timestamps();

            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('user_survey_id')->references('id')->on('user_survey');
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
