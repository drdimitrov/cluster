<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MethodController extends Controller
{
    public function index(){
    	return view('method');
    }

    public function first(){
    	return view('method.transition_first');
    }

    public function second(){
    	return view('method.transition_second');
    }

    public function third(){
    	return view('method.transition_third');
    }

    public function generator(){
    	return view('method.generator');
    }
}
