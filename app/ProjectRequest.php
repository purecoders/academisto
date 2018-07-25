<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProjectRequest extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id', 'project_id', 'description','price',
    'is_accepted'
  ];






  public function project(){
    return $this->belongsTo('App\Project');
  }
}
