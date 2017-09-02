<?php

namespace App;

// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Model;

class Task extends Model
{
	protected $collection = 'tasks';
	protected $connection = 'mongodb';

    public function getBodyAttribute($value) {
    	return ucfirst($value);
    }

    public function setBodyAttribute($value) {
    	return $this->attributes['body'] = ucfirst($value);
    }
}
