<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $table = "servicio";
    protected $primaryKey = "idS";
    public $timestamps = false;

    protected $fillable = ['nombreS','precio'];

    public function barberia(){
        return $this->belongsTo('App\Barberia' , 'idB');
    }

}

