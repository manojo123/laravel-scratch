<?php

namespace App;

use App\Comment;
use App\Tag;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
	/**
	 * Has Many Eloquent
	 * @return App\Comment
	 */
	public function comments(){
		return $this->hasMany(Comment::class);
	}

	/**
	 * Belongs To Many Eloquent
	 * @return App\Video
	 */
	public function tags(){
		return $this->belongsToMany(Tag::class)->withTimestamps();
	}
}
