<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class school extends Model
{
     protected $guarded = [];
   
     public function programes(){
        return $this->hasMany(programe::class);
    }
   
     public function image(){
        return $this->hasOne(image::class);
    }
    public function contact(){
        return $this->hasOne(contact::class);
    }
     public function users(){
        return $this->hasMany(User::class);
    }
}
