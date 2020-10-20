<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = "comentario";
    protected $primaryKey = "idC";

    protected $fillable = ['comentario', 'user_id'];

    public function usuario()
    {
        return $this->hasMany('App\Usuario','idU');
    }

    public function user()
    {
        return $this->hasMany('App\User');
    }

    public function haveUser(){ 

        return $this->user->pluck('name');

        //$comentarioUsuario = App\Comentario::find(4)->usuario;

   }
  

    public function tieneUsuario(){ 

        return $this->usuario->flatten()->pluck('name')->where('user_id', '===', 'idU');

        //$comentarioUsuario = App\Comentario::find(4)->usuario;

   }


  

 
}
