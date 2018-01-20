<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesin extends Model
{
    //
     protected $table='mesin';

     protected $fillable = [
      'nm_mesin', 'Harga'
    ];


    public function Booking()
    {
        return $this->hasMany('App\Booking');
    }
}
}
