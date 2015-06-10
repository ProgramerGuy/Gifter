<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class gift_shop extends Model {

	protected $table = 'gift_shop';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['tittle', 'description', 'image', 'price', 'existence', 'views'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */


}
