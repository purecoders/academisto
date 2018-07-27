<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rate extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id_from', 'user_id_to', 'project_id','rate'
  ];
}
