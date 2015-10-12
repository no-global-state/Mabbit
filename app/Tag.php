<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	/**
	 * {@inheritDoc}
	 */
	protected $fillable = [
		'name'
	];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

	/**
	 * Returns a collection of associated issues
	 * 
	 * @return array
	 */
	public function issues()
	{
		return $this->belongsToMany('App\Issue');
	}
}
