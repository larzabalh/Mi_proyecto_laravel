<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
  protected $table = 'bancos';
  protected $fillable = ['id,banco,condicion'];

}
