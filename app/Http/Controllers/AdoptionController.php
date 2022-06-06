<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use storage;
use Illuminate\Support\File;

class AdoptionController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(){
        $adoptions = Adoption::all();
        return view('adoption/adoption_index',['adoptions' => $adoptions]);
    }

    public function show(){
        return view('adoption/adoption_show');
    }

    public function store(Request $request){

        $request->validate([
            'pet_name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'health_status' => 'required',
            'adoption_reason' => 'required',
            'path' => 'required|mimes:jpeg,png,jpeg|max:5048',
        ]);

        $newImageName = time() . '-' . $request->pet_name . '.' .$request->path->extension();
        $request->path->move(public_path('storage/images'),$newImageName);

        auth()->user()->adoptions()->create([
            'pet_name' => $request->input('pet_name'),
            'gender' => $request->input('gender'),
            'age' => $request->input('age'),
            'health_status' => $request->input('health_status'),
            'adoption_reason' => $request->input('adoption_reason'),
            'path' => $newImageName
        ]);
        return redirect()->route('adoption.index')->with('notice','已發布');
    }


//    public function store(Request $request){
//
//        $content = $request->validate([
//            'pet_name' => 'required',
//            'gender' => 'required',
//            'age' => 'required',
//            'health_status' => 'required',
//            'adoption_reason' => 'required',
//            'path' => 'required|mimes:jpeg,png,jpeg|max:5048',
//        ]);
//
//        $newImageName = time() . '-' . $request->pet_name . '.' .$request->path->extension();
//        $request->path->move(public_path('images'),$newImageName);
//
//
//        $name = $request->file('path')->getClientOriginalName();
//        $extension = $request->file('path')->getClientOriginalExtension();
//        $request['pet_name'] = $name;
//
//        $request->file('path')->store('public/images');
//
//        auth()->user()->adoptions()->create($content);
//        return redirect()->route('adoption.index')->with('notice','已發布');
//    }
}
