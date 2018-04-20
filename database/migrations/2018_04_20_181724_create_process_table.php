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
        Schema::create('processes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado',60);
            $table->string('recepcion',60);
            $table->string('finalizacion',80);

            $table->unsignedInteger('document_id');
            $table->foreign('document_id')
                    ->references('id')
                    ->on('documents');
           
            $table->foreign('observations_id')
            ->references('id')
            ->on('observations');
           
            $table->foreign('handler_id')
            ->references('id')
            ->on('handler');
 
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
        Schema::dropIfExists('processes');
    }
}
