<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class note extends Model
{
     protected $guarded = [];

      public function User(){
          return $this->belongsTo('App\User');
     }
}
