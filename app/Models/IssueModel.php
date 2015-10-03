<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class IssueModel extends Model
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
		'description'
	];
}
