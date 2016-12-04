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
        $targetUrl = request()->url();

        if(!count($transgroups)){
            return redirect('/');
        }
        
        if($num >= 7 && !auth()->check()){
            return redirect('/login')->withInfo('Съдържанието е достъпно само за регистрирани потребители. Влезте в акаунта си или се регистрирайте ако нямате такъв. &nbsp; <a href="/register">Регистрация</a>')->withTarget($targetUrl);         
        }

        $transitions = TransitionGroups::with('transitions', 'notes', 'videos')->find($num);

    	return view('method.transitions', compact('transitions', 'transgroups', 'part'));
    }

    
}
