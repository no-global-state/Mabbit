<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
	/**
	 * {@inheritDoc}
	 */
	protected $table = 'system_issues';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

	/**
	 * {@inheritDoc}
	 */
	protected $fillable = [
		'name', 
		'description',
		'solved'
	];
}
