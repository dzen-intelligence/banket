<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHallsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('halls', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->text('description');
            $table->string('preview_image', 100)->nullable();
//            $table->unsignedBigInteger('restaurateur_id');
            $table->unsignedBigInteger('type_id');
            $table->unsignedBigInteger('instituion_id');
            $table->decimal('price_per_person', 10, 2);
            $table->integer('persons_count');
//            $table->string('address', 150);
//            $table->string('state', 30);
//            $table->double('longitude');
//            $table->double('latitude');
            $table->timestamps();

//            $table->foreign('restaurateur_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('instituion_id')->references('id')->on('instituions')->onDelete('cascade');
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('halls');
    }
}
