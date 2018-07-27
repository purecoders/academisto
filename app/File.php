<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
  use SoftDeletes;
  protected $dates = ['deleted_at'];
}
