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
        Schema::create('processs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado',80);
            $table->date('date_reception');
            $table->date('date_finally');
            $table->unsignedInteger('observation_id');
            $table->foreign('observation_id')
                    ->references('id')
                    ->on('observations');
            $table->unsignedInteger('attached_id');
            $table->foreign('attached_id')
                    ->references('id')
                    ->on('attacheds');
            $table->unsignedInteger('handler_id');
            $table->foreign('handler_id')
                    ->references('id')
                    ->on('handlers');
            $table->primary('process_id');
            $table->foreign('process_id')
                    ->references('id')
                    ->on('processs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processs');
    }
}
