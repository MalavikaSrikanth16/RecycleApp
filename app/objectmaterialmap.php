<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class objectmaterialmap extends Model
{

	protected $fillable = [
	'id',
	'object',
	'material'
	];

	public $timestamps = false;     
}
