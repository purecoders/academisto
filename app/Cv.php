<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cv extends Model
{

  use SoftDeletes;

  protected $fillable = [
    'user_id', 'cv_text', 'is_accepted'
  ];


    public function user(){
      return $this->belongsTo('App\User');
    }
}
