<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'text', 'date', 'image', 'mime', 'size', 'user_id'];

    public function user(){
      return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
