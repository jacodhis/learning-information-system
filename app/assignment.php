<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class assignment extends Model
{
    
     protected $guarded = [];

      public function User(){
          return $this->belongsTo('App\User');
     }
     public function coments(){
         return $this->morphMany(coment::class,'commentable');
     }
      public function assignos(){
         return $this->hasMany('App\assigno');
     }
}
