<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefits extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'benefits';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'datestart', 'dateend', 'latitude', 'longitude', 'image', 'mime', 'size', 'percent', 'keywords'];
}
