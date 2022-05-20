<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function productList()
    {
        $products = Product::all();

        return view('products', compact('products'));
    }
}
