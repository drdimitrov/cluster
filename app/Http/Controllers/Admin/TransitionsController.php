<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transition;
use App\Part;
use App\TransitionGroups;
use App\MethodNote;
use App\MethodVideo;

class TransitionsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
        $this->middleware('admin');
    }
    
    public function trGroups(){
        $parts = Part::all();
    	return view('admin.transition-groups', compact('parts'));
    }

    public function savetrGroups(Request $r){
        
        $this->validate($r, [ 'name' => 'required' ]);

    	$group = TransitionGroups::create([
    		'name' => $r->name,
            'part' => $r->part,
		]);

        $folder = TransitionGroups::find($group->id);
        $folder->folder = 't'.str_random(10).$folder->id;
        $folder->save();

        

		if($group->save()){
			return back()->with('msg_success', 'Transition has been uploaded successfully.');
		}

		return back()->with('msg_danger', 'Whoops, something went wrong.');
    }

    public function transitions(){
    	$groups = TransitionGroups::all();

        return view('admin.transitions', compact('groups'));
    }

    public function saveTransition(Request $r){
        
        $transition = Transition::create([
            'name' => str_replace(' ', '_', $r->name),
            'transition' => $r->transition,
            'description' => $r->description,
        ]);

        $folder = TransitionGroups::find($r->transition)->folder;

        if($transition->save()){
            $r->file('picture')->storeAs('public/' . $folder, str_replace(' ', '_', $r->name).'.png');
            return back()->with('msg_success', 'File has been uploaded successfully.');
        }

        return back()->with('msg_danger', 'Whoops, something went wrong.');
        
    }

    public function notes(){
    	$groups = TransitionGroups::all();

        return view('admin.notes', compact('groups'));
    }

    public function saveNotes(Request $r){
        
    	$note = MethodNote::create([
            'name' => $r->name,
            'description' => $r->description,
            'transition' => $r->transition,
        ]);

        if($note->save()){
            $r->file('notes')->storeAs('public/notes_'.$r->transition, $r->name.'.png');
            return back()->with('msg_success', 'File has been uploaded successfully.');
        }

        return back()->with('msg_danger', 'Whoops, something went wrong.');
    }

    public function videos(){
    	$groups = TransitionGroups::all();

        return view('admin.method-videos', compact('groups'));
    }

    public function saveVideos(Request $r){
        
        $source = str_replace('/', '', parse_url($r->name)['path']); 
    	
        $video = MethodVideo::create([
            'name' => $source,
            'description' => $r->description,
            'transition' => $r->transition,
        ]);

        if($video->save()){
            return back()->with('msg_success', 'Video has been uploaded successfully.');
        }

        return back()->with('msg_danger', 'Whoops, something went wrong.');
    }
}
