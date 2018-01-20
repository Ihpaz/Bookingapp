<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    //
     protected $table='petugas';


     protected $fillable = [
      'Nm_Pgw', 'No_Telp', 'alamat','Email','password'
    ];
}
}
