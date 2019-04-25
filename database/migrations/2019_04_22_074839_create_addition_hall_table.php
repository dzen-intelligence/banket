<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdditionHallTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addition_hall', function (Blueprint $table) {
            $table->bigInteger('addition_id')->unsigned();
            $table->bigInteger('hall_id')->unsigned();

            $table->foreign('addition_id')->references('id')->on('additions')->onDelete('cascade');
            $table->foreign('hall_id')->references('id')->on('halls')->onDelete('cascade');

            // TODO://  нет timestamps, в модели надо написать $timestamps = false;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addition_hall');
    }
}
