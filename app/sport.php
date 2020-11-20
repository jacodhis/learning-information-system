<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sport extends Model
{
     protected $guarded = [];
   
     public function User(){
          return $this->belongsTo('App\User');
     }
     public function comments(){
         return $this->morphMany(comment::class,'commentable');
     }
}
