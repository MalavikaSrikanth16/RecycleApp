<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maplocation extends Model
{
    protected $fillable = [
	'id',
	'category',
	'subcategory',
	'lat',
	'long',
	'refid'
	];

	public $timestamps = false;  
}
