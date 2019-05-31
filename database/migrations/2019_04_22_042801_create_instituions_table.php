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
            $table->string('name')->nullable(false);
            $table->string('state')->nullable(false);
            $table->string('city', 50)->nullable();
            $table->string('lat')->nullable(false);
            $table->string('lon')->nullable(false);
            $table->string('street')->nullable(false);


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
