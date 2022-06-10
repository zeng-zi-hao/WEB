<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function profile_index(){
        return view('profile/profile');
    }

    public function update_information(){

    }

    public function update_password(){

    }
}
