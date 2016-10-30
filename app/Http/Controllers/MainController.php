<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Image;
use App\Video;
use App\News;
use Mail;
use App\Mail\ContactMailSent;

class MainController extends Controller
{

	
    public function index(){
        
        $images = Image::get()->random(6);

    	return view('index', compact('images'));

    }

    public function images(){
    	
    	$images = Image::orderBy('created_at', 'desc')->paginate(6);
    	
    	return view('images', compact('images'));

    }

    public function videos(){

        $videos = Video::orderBy('created_at', 'desc')->paginate(6);

    	return view('videos', compact('videos'));

    }

    public function contact(Request $r, ContactMailSent $cm){
        
        Mail::to('dimitrova@cluster-guitar.info')
            ->send($cm);
			
		return redirect('/');
		/*
		if($mail){
			return redirect('/')->with(
				'msg-mail',
				'Your email has been sent. We will get back to you as soon as possible. Thanks!'
			);
		}
        
		return redirect('/')->with(
			'msg-mail',
			'Sending failed. Please, try again later.'
		);
		*/
    }

    public function news($item = null){

        if(!$item){
            $news = News::with('image')->orderBy('id' , 'DESC')->limit(5)->get();
            return view('news', compact('news'));
        }

        $current = News::find($item);
        $prev = News::find($item+1);
        $next = News::find($item-1);
        return view('news', compact('current', 'prev', 'next'));
    }
    
}
