<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pegawai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pegawai', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nm_Pgw',40);
            $table->string('No_Telp',15);
            $table->string('alamat',100);
            $table->string('Email',40);
            $table->string('Password',80);
            $table->string('Level',10);
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
