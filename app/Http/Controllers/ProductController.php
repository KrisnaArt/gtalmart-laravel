<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function detailProduct()
    {
        return view('product_detail');
    }

    public function show($id)
    {
        return view('products',[
            'categories' => Product::find($id)
        ]);
    }
}
