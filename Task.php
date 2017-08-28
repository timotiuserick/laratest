<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function getBodyAttribute($value) {
    	return ucfirst($value);
    }

    public function setBodyAttribute($value) {
    	return $this->attributes['body'] = ucfirst($value);
    }
}
