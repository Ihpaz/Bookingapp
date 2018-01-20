<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class pembayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->string('kd_booking',10);
            $table->date('no_rekening');
            $table->string('nm_bank',15);
            $table->string('nm_rekening',30);
            $table->string('keterangan',50);
            $table->string('no_rek_tujuan',15);
            $table->integer('biaya');
            $table->integer('jml_bayar');
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
