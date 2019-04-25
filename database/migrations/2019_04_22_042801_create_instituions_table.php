<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstituionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instituions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('restaurateur_id');
            // TODO://  нет timestamps, в модели надо написать $timestamps = false;

            $table->foreign('restaurateur_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instituions');
    }
}
