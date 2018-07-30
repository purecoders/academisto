<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectAnswer extends Model
{
  use SoftDeletes;
  protected $fillable = [
    'project_id', 'sender_user_id', 'description'
  ];


  public function project(){
    return $this->belongsTo('App\Project');
  }
}
