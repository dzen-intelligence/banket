<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hall_contacts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('phone', 12);
            $table->string('email', 30)->nullable();
            $table->string('site', 30)->nullable();
            $table->string('vkontakte', 30)->nullable();
            $table->string('instagram', 30)->nullable();
            $table->boolean('whatsapp')->default(false)->nullable();
            // TODO://  нет timestamps, в модели надо написать $timestamps = false;
            $table->unsignedBigInteger('hall_id');
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
        Schema::dropIfExists('hall_contacts');
    }
}
