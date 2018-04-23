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
            $table->string('state');
             $table->string('reception');
             $table->date('start');
            $table->date('finish');
             $table->unsignedBigInteger('process_id');
             $table->foreign('process_id')
                 ->references('id')
                 ->on('process');
             $table->unsignedBigInteger('tramits_id');
             $table->foreign('tramits_id')
                ->references('id')
               ->on('tramits');
             $table->unsignedBigInteger('observer_id');
             $table->foreign('observer_id')
                 ->references('id')
                 ->on('observer');
             $table->unsignedBigInteger('adds_id');
             $table->foreign('adds_id')
                ->references('id')
                 ->on('adds');
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
