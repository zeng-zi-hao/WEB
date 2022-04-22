<?php

namespace App\Http\Controllers;

use App\Models\Share;
use Illuminate\Http\Request;

class SharesController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }

    public function index(){
        $shares = Share::orderBy('id','desc')->paginate(3);
        return view('shares.index',['shares' => $shares]);
    }

    public function show($share_id){
        $share = Share::find($share_id);
        return view('shares.show',['shares'=>$share]);
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

    public function edit($share_id){
        $share = auth()->user()->shares->find($share_id);
        return view('shares.edit',['shares'=>$share]);

    }

    public function update(Request $request, $share_id){
        $share = auth()->user()->shares->find($share_id);
        $content = $request->validate([
           'title' => 'required',
           'content' => 'required|min:10'
        ]);

        $share->update($content);
        return redirect()->route('root')->with('notice','Update success!!');
    }

    public function destroy($share_id){
        $share = auth()->user()->shares->find($share_id);
        $share->delete();
        return redirect()->route('root')->with('notice','Delete success!!');
    }
}
