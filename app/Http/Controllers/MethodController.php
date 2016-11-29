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

    public function transitions($part, $num){

        $transgroups = TransitionGroups::where('part', $part)->get();

        if(!count($transgroups)){
            return redirect('/');
        }

        $transitions = TransitionGroups::with('transitions', 'notes', 'videos')->find($num);

    	return view('method.transitions', compact('transitions', 'transgroups', 'part'));
    }

    
}
