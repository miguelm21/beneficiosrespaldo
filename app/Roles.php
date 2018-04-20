<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'roles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    public function roles_users(){
      return $this->hasOne('App\User_Role');
    }
    public function user(){
      return $this->belongsTO('App\User');
    }
}
