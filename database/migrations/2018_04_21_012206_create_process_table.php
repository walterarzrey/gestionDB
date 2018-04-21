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
            $table->date('finish');
            $table->unsignedInteger('process_id');
            $table->foreign('process_id')
                ->references('id')
                ->on('process');
            $table->unsignedInteger('transact_id');
            $table->foreign('transact_id')
                ->references('id')
                ->on('handlers');
            $table->unsignedInteger('observer_id');
            $table->foreign('observer_id')
                ->references('id')
                ->on('observations');
            $table->unsignedInteger('attached_id');
            $table->foreign('attached_id')
                ->references('id')
                ->on('attached');
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
