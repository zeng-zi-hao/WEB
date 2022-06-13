<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Model\admin\admin;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index(){
        return view('profile/profile');
    }

    public function edit(){

    }

    public function update(){

    }

    public function update_password(){

    }
}
