<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Transition;
use App\TransitionGroups;

class TransitionsController extends Controller
{
    public function trGroups(){
    	return view('admin.transition-groups');
    }

    public function savetrGroups(Request $r){

        $this->validate($r, [
        	'name' => 'required'
    	]);

    	$group = TransitionGroups::create([
    		'name' => $r->name
		]);

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

        if($transition->save()){
            $r->file('picture')->storeAs('public/transition_'.$r->transition, $r->name.'.png');
            return back()->with('msg_success', 'File has been uploaded successfully.');
        }

        return back()->with('msg_danger', 'Whoops, something went wrong.');
        
    }
}
