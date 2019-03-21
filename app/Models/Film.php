<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
	use Searchable;
	//
	protected $primaryKey = 'film_id';
	
	//
	protected $table = 'film';
	
	public function searchableAs(){
		return 'films_index';
	}
}
