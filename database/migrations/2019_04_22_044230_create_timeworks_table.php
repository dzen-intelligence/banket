<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeworksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timeworks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('monday', 14)->nullable();
            $table->string('tuesday', 14)->nullable();
            $table->string('wednesday', 14)->nullable();
            $table->string('thursday', 14)->nullable();
            $table->string('friday', 14)->nullable();
            $table->string('saturday', 14)->nullable();
            $table->string('sunday', 14)->nullable();

            $table->unsignedBigInteger('hall_id');
            // TODO://  нет timestamps, в модели надо написать $timestamps = false;

            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timeworks');
    }
}
