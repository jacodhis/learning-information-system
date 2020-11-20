<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $guaded = [];

    public function user(){
          return $this->belongsTo('App\User');
     }
     
    public function commentable(){
    	return $this->morphTo();
    }
    public function comments(){
         return $this->morphMany(comment::class,'commentable');
     }
}
