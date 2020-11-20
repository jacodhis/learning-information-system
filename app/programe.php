<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class programe extends Model
{
     protected $guarded = [];
   
     public function school(){
          return $this->belongsTo(school::class);
     }
      public function years(){
          return $this->hasMany(year::class);
     }

      public function users(){
        return $this->belongsToMany(User::class);
    }
    public function roles(){
        return $this->belongsToMany(role::class);
    }
}
