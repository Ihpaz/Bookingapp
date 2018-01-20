<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
     protected $table='booking';

     protected $fillable = [
      'Tgl_Booking', 'Tgl_cuci', 'No_pol','jam_cuci','jam_selesai',
      'kd_mesin'
    ];

	public function Pembayaran()
    {
    	return $this->hasOne('App\Pembayaran');
    }

    public function Pelanggan()
    {
        return $this->belongsTo('App\Pelanggan');
    }

     public function Mesin()
    {
        return $this->belongsTo('App\Mesin');
    }


}
