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
            $table->date('date_completion');
         

            $table->unsignedInteger('adjunct_id');
            $table->foreign('adjunct_id')
            ->references('id')
            ->on('adjunct');

            $table->unsignedInteger('transacter_id');
            $table->foreign('transacter_id')
            ->references('id')
            ->on('transacter');

            $table->unsignedInteger('observations_id');
            $table->foreign('observations_id')
            ->references('id')
            ->on('observations');

            $table->unsignedInteger('process_id');
            $table->foreign('process_id')
            ->references('id')
            ->on('process');
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
