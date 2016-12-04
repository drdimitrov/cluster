<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ActivationToken;

class ActivationController extends Controller
{
    public function activate(ActivationToken $token){

    	$token->user()->update([
    		'active' => true,
		]);

		$token->delete();

		\Auth::login($token->user);

		return redirect()->intended('/home');
    }

    public function resend(Request $r){

    }
}
