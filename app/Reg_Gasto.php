<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reg_Gasto extends Model
{

  protected $table = 'reg_gastos';
  protected $guarded = [];
  //Relacion
  public function gasto() {
        return $this->belongsTo(Gasto::class); // Le indicamos que se va relacionar con el atributo id
    }
public function scopeComentario($query,$comentario){

          if(trim($comentario)!=""){
          $query->where("comentario","LIKE","%$comentario%");
          }
}

}
