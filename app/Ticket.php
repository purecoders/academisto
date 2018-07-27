<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
  use SoftDeletes;

  protected $fillable = [
    'user_id', 'title', 'description'
  ];
}
