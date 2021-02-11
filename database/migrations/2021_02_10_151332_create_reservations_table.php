<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name', 150);
            $table->integer('hotel_id');
            $table->integer('user_id');
            $table->integer('room_id');
            $table->string('email', 50)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('IP', 20)->nullable();
            $table->text('check_in');
            $table->text('check_out');
            $table->float('total');
            $table->integer('days');
            $table->string('note', 150)->nullable();
            $table->string('status', 30)->default('New');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
