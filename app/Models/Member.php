<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function region(){
    	return $this->belongsTo('App\Models\Region');
    }

    public function role(){
    	return $this->belongsTo('App\Models\Role');
    }
}
