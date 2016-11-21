<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MethodController extends Controller
{
    public function index(){
    	return view('method');
    }
}
