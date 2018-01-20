<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    //

    protected $table='pembayaran';
    protected $fillable = [
      'no_rekening', 'nm_bank', 'nm_rekening','keterangan',
      'no_rek_tujuan','biaya','jml_bayar'
    ];


    public function Booking()
    {
    	return $this->belongsTo('App\Booking');
    }

    
}
