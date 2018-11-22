<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class ProductsController extends Controller
{
    public function index() {
        $pro = products::all();
        return view('products.list')->with('pro', $pro);
    }
}
