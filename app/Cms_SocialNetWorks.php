<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cms_SocialNetworks extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'cms_socialnetworks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'url'];
}
