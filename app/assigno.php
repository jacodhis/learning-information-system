<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assigno extends Model
{
    //
     protected $guarded = [];
     
     public function assignment(){
         return $this->belongsTo('App\assignment');
     }
      public function User(){
         return $this->belongsTo('App\User');
     }
}
