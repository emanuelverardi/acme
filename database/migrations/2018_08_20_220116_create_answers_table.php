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
            $table->unsignedInteger('user_question_id');
            $table->unsignedInteger('answer_type_metadata_item_id');
            $table->timestamps();

            $table->foreign('user_question_id')->references('id')->on('user_questions');
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
