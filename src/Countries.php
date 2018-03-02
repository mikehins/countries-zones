<?php

namespace App;

class Countries
{
	protected $guarded = [];
	
	public function zones()
	{
		return $this->hasMany('zones');
	}
}
