<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adoption;

class AdoptionController extends Controller
{
    public function store(Request $request){
        $content = $request->validate([
            'pet_name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'health_status' => 'required',
            'adoption_reason' => 'required',
        ]);

        auth()->user()->adoptions()->create($content);
        return redirect()->route('adoption.index')->with('notice','已發布');
    }
}
