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
            $table->unsignedInteger('process_id');
            $table->foreign('process_id')
                    ->references('id')
                    ->on('process');

            $table->unsignedInteger('observation_id');
            $table->foreign('observation_id')
                    ->references('id')
                    ->on('observations');
            
            $table->unsignedInteger('handler_id');
            $table->foreign('handler_id')
                    ->references('id')
                    ->on('handlers');

            $table->unsignedInteer('attachment_id');
            $table->foreign('attachment_id')
                    ->references('id')
                    ->on('attachments');
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
