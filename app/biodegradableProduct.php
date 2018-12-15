<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class biodegradableProduct extends Model
{
	protected $fillable=[
	'id',
	'item',
	'biodegradable'
	];

	public $timestamps = false;

}
