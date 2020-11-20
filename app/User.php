<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($user) {
    //         $user->create([
    //             'role_id' => 1,
    //             'school_id' => 1,
    //             'created_at' => '2020-07-16 16:30:52',
    //              'updated_at' => '2020-07-16 16:30:52'
    //         ]);
    //     });
    // }

     public function sports(){
          return $this->hasMany('App\sport');
     }

      public function assignments(){
          return $this->hasMany('App\assignment');
     }
      public function notes(){
          return $this->hasMany('App\note');
     }

   
     public function role(){
        return $this->belongsTo(role::class);
    }
     public function programes(){
        return $this->belongsToMany(programe::class);
    }
     public function units(){
          return $this->hasMany('App\unit');
     }
     public function school(){
          return $this->belongsTo('App\school');
     }

   

}
