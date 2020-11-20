<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coment extends Model
{
	protected $guarded = [];

     public function user(){
          return $this->belongsTo('App\User');
     }
     
    public function comentable(){
    	return $this->morphTo();
    }
    public function coments(){
         return $this->morphMany(coment::class,'comentable');
     }
}
