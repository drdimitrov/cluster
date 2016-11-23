<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\TransitionGroups;

class MethodController extends Controller
{
    public function index(){
    	return view('method');
    }

    public function transitions($num){
        $transitions = TransitionGroups::with('tranditions')->find($num);
        dd($transitions);
    	return view('method.transitions', compact('transitions'));
    }

    public function generator(){
    	return view('method.generator');
    }
}
