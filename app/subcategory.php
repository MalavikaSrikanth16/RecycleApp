<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
	protected $fillable=[
		'id',
		'category',
		'subcategory'
	];    

	public $timestamps = false;
}
