<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
	'post' => 'App\post',
	'feed' => 'App\feed'
]);

class comment extends Model
{
    public function commentable() {
    	return $this->morphTo();
    }
}
