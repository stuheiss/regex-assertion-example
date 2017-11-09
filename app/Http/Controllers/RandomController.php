<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RandomController extends Controller
{
    public function index()
    {
    	return sprintf("Hello and the winning number is %d!", rand(0,100));
    }
}
