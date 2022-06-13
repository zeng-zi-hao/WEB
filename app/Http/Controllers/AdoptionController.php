<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;
use storage;
use Illuminate\Support\File;

class AdoptionController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show','adoption_index']);
    }

    public function index(){
        $adoptions = Adoption::orderBy('id','desc')->paginate(10);
        return view('adoption/adoption_index',['adoptions' => $adoptions]);
    }

    public function show($id){
        $adoption = Adoption::find($id);
        if(!$adoption){
            abort(404);
        }
        return view('adoption/adoption_show',['adoptions'=>$adoption]);
    }

    public function adoptionHistory(){
        $historys = auth()->user()->adoptions->all();
        return view('adoption/adoption_history',compact('historys'));
    }

    public function create(){
        return view('adoption/adoption_create');
    }

    public function store(Request $request){

        $request->validate([
            'pet_name' => 'required|max:100',
            'gender' => 'required|max:10',
            'age' => 'integer|min:0|max:40',
            'health_status' => 'required|max:100',
            'adoption_reason' => 'required|max:255',
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
            'path' => $newImageName,
        ]);
        return redirect()->route('adoption.index')->with('notice','已發布');
    }

    public function edit($id){
        $adoption = auth()->user()->adoptions->find($id);
        if(!$adoption){
            abort(404);
        }
        return view('adoption/adoption_edit',['adoption'=>$adoption]);
    }

    public function update(Request $request, $id){
        $share = auth()->user()->adoptions->find($id);
        $request->validate([
            'pet_name' => 'required',
            'age' => 'integer|min:0|max:40',
            'health_status' => 'required',
            'adoption_reason' => 'required',
            'path' => 'required|mimes:jpeg,png,jpeg|max:5048',
        ]);

        $newImageName = time() . '-' . $request->pet_name . '.' .$request->path->extension();
        $request->path->move(public_path('storage/images'),$newImageName);

        auth()->user()->adoptions()->find($id)->update([
            'pet_name' => $request->input('pet_name'),
            'age' => $request->input('age'),
            'health_status' => $request->input('health_status'),
            'adoption_reason' => $request->input('adoption_reason'),
            'path' => $newImageName,
        ]);
        return redirect()->route('adoption.index')->with('notice','已發布');
    }

    public function destroy($id){
        $share = auth()->user()->adoptions->find($id);
        $share->delete();
        return redirect()->route('self_adoption_history')->with('notice','Delete success!!');
    }
}
