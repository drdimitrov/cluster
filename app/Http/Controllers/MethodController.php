<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TransitionGroups;

class MethodController extends Controller
{
    public function index(){
    	return view('method');
    }

    public function transitions(Request $r){

        $part = $r->part;

        $transgroups = TransitionGroups::with('transitions', 'notes', 'videos')
            ->where('part', $part)->get();

        if(!count($transgroups)){
            return redirect('/');
        }

        if(!$r->num){
            $transitions = $transgroups->first();
        }else{
            if(!isset($transgroups[$r->num - 1])){
                return redirect('/');
            }

            $transitions = $transgroups[$r->num - 1];
        }

        if(!count($transitions->transitions)){
            return redirect('/');
        }
        
        if($r->num >= 5 && !auth()->check()){
            return redirect('/login')->withInfo('Съдържанието е достъпно само за регистрирани потребители. Влезте в акаунта си или се регистрирайте ако нямате такъв. &nbsp; <a href="/register">Регистрация</a>')->withTarget(request()->url());         
        }

    	return view('method.transitions', compact('transitions', 'transgroups', 'part'));
    }

    
}
