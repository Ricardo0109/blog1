<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

//Conexion a DB
class Post extends Model
{
	use Sluggable;
	//protected $table = ''; -> si la tabla se llamara diferente
	protected $table = "posts";
	protected $fillable = ['title', 'body', 'category_id', 'user_id', 'slug'];

	public function sluggable()
	{
		return [
			'slug' => ['source' => 'title']
		];
	}

	public function scopeIncomplete($query)
	{
		return $query->where('completed', 0);
	}

	//Relaciones
	public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function images()
	{
		return $this->hasMany('App\Image');
	}

	public function tags()
	{
		return $this->belongsToMany('App\Tag');
	}

	protected $casts = [ 'completed' => 'boolean' ];


}
