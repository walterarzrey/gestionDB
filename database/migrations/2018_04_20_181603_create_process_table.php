<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state',40);
            $table->date('date_reception');
            $table->date('date_ending');
            $table->unsignedInteger('document_id');
            $table->foreign('document_id')->references('id')->on('documents');
            $table->unsignedInteger('proceeding_id');
            $table->foreign('proceeding_id')->references('id')->on('proceeding');
            $table->unsignedInteger('observation_id');
            $table->foreign('observation_id')->references('id')->on('observation');
            $table->unsignedInteger('attached_id');
            $table->foreign('attached_id')->references('id')->on('attached');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('process');
    }
}
