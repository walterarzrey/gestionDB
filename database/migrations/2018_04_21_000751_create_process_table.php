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
            $table->string('states', 40);
            $table->date('date_reception');
            $table->date('date_finished');
            $table->unsignedBigInteger('process_id');
            $table->foreign('process_id')
                    ->references('id')
                    ->on('process');
            $table->unsignedBigInteger('observation_id');
            $table->foreign('observation_id')
                    ->references('id')
                    ->on('observation');
            $table->unsignedBigInteger('handler_id');
            $table->foreign('handler_id')
                    ->references('id')
                    ->on('handler');
            $table->unsignedBigInteger('adjunct_id');
            $table->foreign('adjunct_id')
                    ->references('id')
                    ->on('adjunct');
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
