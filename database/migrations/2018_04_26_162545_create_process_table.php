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
            $table->date('date_reception');
            $table->date('date_conclusion');

            $table->unsignedInteger('observation_id');
            $table->foreign('observation_id')
            ->references('id')
            ->on('observation');

            $table->unsignedInteger('handler_id');
            $table->foreign('handler_id')
            ->references('id')
            ->on('handler');

            $table->unsignedInteger('adjunct_id');
            $table->foreign('adjunct_id')
            ->references('id')
            ->on('adjunct');

            $table->unsignedInteger('precess_id');
            $table->foreign('precess_id')
            ->references('id')
            ->on('precess');
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
