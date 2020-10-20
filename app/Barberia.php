<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barberia extends Model
{
    protected $table = "barberia";
    protected $primaryKey = "idB";
    public $timestamps = false;

    protected $fillable = [
        
        'nombreB',
        'latitud',
        'longitud',
        'direccion',
        'propietario',
        'telefono',
        'horario'
    ];

    public function servicio(){
        //relacion 1 a muchos con los
        return $this->hasMany("App\Servicio", 'idS');
    }
}
