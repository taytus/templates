<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenderController extends Controller
{

    //$parB=["class"=>"banana","limit"=>"some limit"];
    //class:function($parA, $parB);

    //nestable
	public function index($something){
 	   return view($something);
	}
}
