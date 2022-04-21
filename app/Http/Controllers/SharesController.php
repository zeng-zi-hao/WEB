<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharesController extends Controller
{
    public function index(){
        return view('shares.index');
    }

    public function create(){
        return view('shares.create');
    }

    public function store(Request $request){
        $content = $request->validate([
            'title' => 'required',
            'content' => 'required|min:10'
        ]);

        auth()->user()->shares()->create($content);
        return redirect()->route('root')->with('notice','share success!!');
    }
}
