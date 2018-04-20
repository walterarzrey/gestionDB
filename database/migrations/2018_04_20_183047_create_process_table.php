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
            $table->string('state',50);
            $table->string('reception',60);
            $table->string('ending',60);
            $table->unsignedinteger('attached_id');
            $table->foreign('attached_id')
                    ->references('id')
                    ->on('attacheds');
            $table->unsignedinteger('observation_id');
            $table->foreign('observation_id')
                    ->references('id')
                    ->on('observations');
            $table->unsignedinteger('handler_id');
            $table->foreign('handler_id')
                    ->references('id')
                    ->on('handlers');
           
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
