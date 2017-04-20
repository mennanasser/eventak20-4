<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Event;
use App\User;
use App\Admin;
use App\Location;
class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

	public function display(){
    	return view('admin.dash');
	}

   public function edit(){
   		return view('admin.editadminprofile');
	}

//manage event 
	public function showAllEvents(){
    	$events=Event::all();
       return view('admin.adminmanageevents',compact('events')) ;
    }

	public function approve(Request $request ,$id){
	$event=Event::find($id);

	if($request->event == 'approved'){
			$event->approved = 'accepted';
		}else{
	   		$event->approved = 'rejected';
		}
	$event->save();

	return response()->json(['success' => 'success'], 200);


	}

//manage category
	public function showAllCategory(){
    	$categories=Category::all();
    	return view('admin.adminmanagecategories',compact('categories'));
	}

	public function addCategory(Request $request){
		$this->validate($request,[
			'cat'   => 'required',
			'image' => 'required'
			]);
		$categories           = new Category;
		if($request->cat){
        $categories->name     = $request->cat;
   		}
        if($request->image){
 		$categories->image    = $request->file('image')->store('images');
 		}
 		$categories->save();
		return back();
	}

	public function deleteCategory($id)
        {
            $categories = Category::find($id);
            $categories->delete();
            return back();
        }
  

    public function editCategory(Request $request){
        $this->validate($request,[
			'cat'   => 'required'
			]);
		$category = Category::find($request->id);
		if($request->cat){
        $category->name = $request->cat;
    	}

        if($request->image){
 		$category->image = $request->file('image')->store('images');
 	    }
 		$category->save();
	}    
//manage user
	public function getAllUsers(){
    	$users=User::all();
    	return view('admin.adminManageUsers',compact('users'));
    	
    }
    public function deleteUser($id){
    	$user=User::find($id);
    	$user->delete();
    	return back();
    }	
//manage location
	public function getAllLocation(){
    	$locations=Location::all();
    	return view('admin.adminmanagelocation',compact('locations'));
    }
     public function deleteLocation($id){
    	$locations=Location::find($id);
    	$locations->delete();
    	return back();
    }

    public function addLocation(Request $request){
    	$this->validate($request,[
			'location'       => 'required',
			]);
		$locations           = new Location;
		if($request->location){
        $locations->title    = $request->location;
   		}
 		$locations->save();
		return back();
    }

}
