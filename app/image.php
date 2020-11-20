<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $guarded = [];
   
     public function school(){
        return $this->belongsTo(school::class);
    }
}
