<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
	public function home(){
		echo "hii bhaooooo....................";
	}

	public function home2(){
		echo "HIIIII BILAL......................";
	}
	public function phela(){
		return view('first');
	}

	public function form(){
		return view('demo');
	}
 
}
