<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenderController extends Controller
{
	public function index($something){

 	   return view($something);
	}
}
