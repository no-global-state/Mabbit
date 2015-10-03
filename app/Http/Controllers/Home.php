<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Home extends BaseController
{
	/**
	 * Adds a blog's entity
	 */
	public function addAction()
	{
		return view('add');
	}

	/**
	 * Display a home page
	 */
	public function indexAction()
	{
		return view('home', array(
			
		));
	}
}
