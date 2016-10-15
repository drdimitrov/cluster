<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Image;
use App\Video;
use App\News;
use Uploadcare;

class AdminController extends Controller
{
    protected $errorMessage = 'Whoops, something went wrong. Please, try again.';

    public function __construct(){
        $this->middleware('auth');
    }
	    
    public function index(){
    	return view('admin.index');
    }

    public function images(){
        $images = Image::paginate(10);
    	return view('admin.images')->with('api', app('uploadcare'))->with('images', $images);
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

        if($store->save()){
            return redirect('/admin/images')->with('msg_success', 'Pcture has been saved.');
        }

        return redirect('/admin/images')->with('msg_danger', $this->errorMessage);
    }

    public function editimage(Image $image){
        return view('admin.editImg', compact('image'));
    }

    public function updateimage(Request $r){
        
        $this->validate($r, [
            'description' => 'required'
        ]);

        $image = Image::find($r->id);
        $image->description = $r->description;

        if($image->save()){
            return redirect('/admin/images')->with('msg_success', 'Pcture has been updated.');
        }

        return redirect('/admin/images')->with('msg_danger', $this->errorMessage);
    }

    public function deleteimage(Image $item){
        $message = 'image';
        $action = 'AdminController@destroyImg';
        return view('admin.warning', compact('item', 'message', 'action'));
    }

    public function destroyImg(Request $r){
         $image = Image::find($r->id);

         $file = app('uploadcare')->getFile($image->url);
         $file->delete();

        if($image->delete()){
            return redirect('/admin/images')->with('msg_success', 'Pcture has been deleted.');;
        }

        return redirect('/admin/images')->with('msg_danger', $this->errorMessage);
    }

    public function videos(){
        $videos = Video::paginate(10);
        return view('admin.videos', compact('videos'));
    }

    public function uploadVideo(Request $r){
        
         $this->validate($r, [
            'video' => 'required',
            'description' => 'required',
        ]);

        $source = str_replace('/', '', parse_url($r->video)['path']); 

        $video = Video::create([
            'source' => $source,
            'description' => $r->description,
        ]);

        if($video->save()){
            return redirect('/admin/videos')->with('msg_success', 'Video has been added.');
        }

        return redirect('/admin/images')->with('msg_danger', $this->errorMessage);
    }

    public function editVideo(Video $video){
        return view('admin.editVideo', compact('video'));
    }

    public function updateVideo(Request $r){
        $video = Video::find($r->id);
        $video->description = $r->description;
        
        if($video->save()){
            return redirect('/admin/videos')->with('msg_success', 'Video has been updated.');
        }

        return redirect('/admin/images')->with('msg_danger', $this->errorMessage);
    }

    public function delVideo(Video $item){
        $message = 'video';
        $action = 'AdminController@destroyVideo';
        return view('admin.warning', compact('item', 'message', 'action'));
    }

    public function destroyVideo(Request $r){
        $video = Video::find($r->id);

        if($video->delete()){
            return redirect('/admin/videos')->with('msg_success', 'Video has been deleted.');;
        }

        return redirect('/admin/videos')->with('msg_danger', $this->errorMessage);
    }

    public function news(){
        $news = News::paginate(10);
        $images = Image::orderBy('id', 'DESC')->take(5)->get();
        return view('admin.news', compact('news', 'images'));
    }
}
