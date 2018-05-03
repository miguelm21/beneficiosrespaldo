<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserBenefits extends Model
{
    /**
    * The database table used by the model.
    *
    * @var string
    */
    protected $table = 'user_benefits';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'benefit_id'];
}
