<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gasto extends Model
{
  protected $table = 'gastos';
  protected $guarded = [];

  public $timestamps = false;
}
