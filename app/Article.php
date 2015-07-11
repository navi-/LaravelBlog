<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'title',
    	'body',
    	'published_at',
    	'user_id'
    ];

    protected $dates = ['published_at'];  //Reads the data from these columns in Carbon instance.

    //set<columnname>Attribute  // _ in variable name is replaced by Camel case
	//Almost constructor class
	//Mutator

	public function setPublishedAtAttribute($date){
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
	}    

	//Scopes for building queries - Query Scope
	// Name: scope<scopename>

	public function scopePublished($query) {
		$query->where('published_at', '<=', Carbon::now());
	}

	public function scopeUnpublished($query) {
		$query->where('published_at', '>=', Carbon::now());
	}

	/**
	 * An article is owned a user.
	 */
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}

