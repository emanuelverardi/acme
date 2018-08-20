<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswerTypeMetadataItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer_type_metadata_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('answer_type_metadata_id');
            $table->string('value');
            $table->timestamps();

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
        Schema::dropIfExists('answer_type_metadata_items');
    }
}
