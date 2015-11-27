<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

class Home extends BaseController
{
    /**
     * Display a home page
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // In case already logged in, redirect to a list of issues
        if (\Auth::check()) {
            return redirect()->action('Issues@grid');
        } else {
            return view('home');
        }
    }
}
