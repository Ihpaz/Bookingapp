<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Booking', function (Blueprint $table) {
            $table->string('kd_booking',10);
            $table->date('Tgl_Booking');
            $table->date('Tgl_cuci');
            $table->string('No_pol',15);
            $table->time('jam_cuci');
            $table->time('jam_selesai');
            $table->integer('kd_mesin');
            $table->primary('kd_booking');
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
        //
    }
}
