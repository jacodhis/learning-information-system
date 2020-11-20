<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role extends Model
{
     protected $guarded = [];
   
     public function users(){
        return $this->hasMany(User::class);
    }
    public function programes(){
        return $this->belongsToMany(programe::class);
    }

   
}
