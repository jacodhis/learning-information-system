<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class year extends Model
{
     protected $guarded = [];
   
     public function programe(){
          return $this->belongsTo(programe::class);
     }
}
