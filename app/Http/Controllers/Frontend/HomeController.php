<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.home.index');
    }


	
}
