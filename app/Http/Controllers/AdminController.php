<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Image;
use Uploadcare;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
	    
    public function index(){
    	return view('admin.index');
    }

    public function images(){
    	return view('admin.images')->with('api', app('uploadcare'));
    }

    public function uploadimage(Request $r){

    	if(! $r->has('img_file')){
    		return redirect('/');
    	}

    	$file = app('uploadcare')->getFile($r->img_file);

    	$store = Image::create([
    		'hash' =>  str_random(40),
    		'url' => $file->getUrl(),
            'description' => $r->description,
		]);

        $file->store();

		return redirect('/admin/images');

    }

    public function videos(){

    }

    public function uploadvideo(){
        
    }
}
