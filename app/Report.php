<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id_from', 'user_id_to', 'reportable_id','description'
  ];


  public function reportable(){
    return $this->morphTo();
  }
}
