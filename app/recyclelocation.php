<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class recyclelocation extends Model
{
    protected $fillable = [
    'refid',
    'name',
    'address',
    'landmark',
    'contact',
    'rating'
    ];
    	public $timestamps = false;

}
