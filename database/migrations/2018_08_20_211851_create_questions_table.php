<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question_text');
            $table->unsignedInteger('answer_structure_id');
            $table->unsignedInteger('answer_type_metadata_id')->nullable();
            $table->boolean('is_mandatory')->default(0);
            $table->boolean('is_multiple_choice')->default(0);
            $table->timestamps();

            $table->foreign('answer_structure_id')->references('id')->on('answer_structures');
            $table->foreign('answer_type_metadata_id')->references('id')->on('answer_type_metadata');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
