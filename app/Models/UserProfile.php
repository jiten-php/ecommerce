<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['user_name','first_name','last_name','gender','phone','zip_code','country_id','state_id','city_id','profile_description','address'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
