<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Whislist;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $sort = [['title' => 'Default', 'name' => 'default'], ['title' => 'Price Low', 'name' => 'low-price'], ['title' => 'Price High', 'name' => 'high-price']];
        // ddd(request());
        if ($request['sort'] === "low-price")
            return view('products.products', [
                'products' => Product::orderBy('price', 'asc')->paginate(6),
                'categories' => Category::all(),
                'sorts' => $sort
            ]);
        elseif ($request['sort'] === "high-price")
            return view('products.products', [
                'products' => Product::orderBy('price', 'desc')->paginate(6),
                'categories' => Category::all(),
                'sorts' => $sort
            ]);
        else
            return view('products.products', [
                'products' => Product::paginate(6),
                'categories' => Category::all(),
                'sorts' => $sort
            ]);
    }

    public function show(Product $product)
    {
        return view('products.detail', [
            'products' => $product,
            'product_datas' => Product::where([
                ['category_id', $product->category->id],
                ['id', '!=', $product->id]
            ])->get(),
            'whislist' => Whislist::where('product_id', $product->id)->first()
        ]);
    }

    public function categoryProduct(Request $request, Category $category)
    {
        $sort = [['title' => 'Default', 'name' => 'default'], ['title' => 'Price Low', 'name' => 'low-price'], ['title' => 'Price High', 'name' => 'high-price']];

        if ($request['sort'] === "low-price")
            return view('products.category', [
                'categories' => Category::all(),
                'products' => Product::where('category_id', $category->id)->orderBy('price', 'asc')->paginate(6),
                'product_category' => Product::where('category_id', $category->id)->count(),
                'category_data' => Category::where('slug', $category->slug)->first(),
                'sorts' => $sort
            ]);
        elseif ($request['sort'] === "high-price")
            return view('products.category', [
                'categories' => Category::all(),
                'products' => Product::where('category_id', $category->id)->orderBy('price', 'desc')->paginate(6),
                'product_category' => Product::where('category_id', $category->id)->count(),
                'category_data' => Category::where('slug', $category->slug)->first(),
                'sorts' => $sort
            ]);
        else
            return view('products.category', [
                'categories' => Category::all(),
                'products' => Product::where('category_id', $category->id)->paginate(6),
                'product_category' => Product::where('category_id', $category->id)->count(),
                'category_data' => Category::where('slug', $category->slug)->first(),
                'sorts' => $sort
            ]);
    }

    public function find(Request $request)
    {
        $sort = [['title' => 'Default', 'name' => 'default'], ['title' => 'Price Low', 'name' => 'low-price'], ['title' => 'Price High', 'name' => 'high-price']];

        if ($request['sort'] === "low-price")
            return view('products.products', [
                'products' => Product::filter(request(['search']))->orderBy('price', 'asc')->paginate(6),
                'product_found' => Product::filter(request(['search']))->count(),
                'categories' => Category::all(),
                'sorts' => $sort
            ]);
        elseif ($request['sort'] === "high-price")
            return view('products.products', [
                'products' => Product::filter(request(['search']))->orderBy('price', 'desc')->paginate(6),
                'product_found' => Product::filter(request(['search']))->count(),
                'categories' => Category::all(),
                'sorts' => $sort
            ]);
        else
            return view('products.products', [
                'products' => Product::filter(request(['search']))->paginate(6),
                'product_found' => Product::filter(request(['search']))->count(),
                'categories' => Category::all(),
                'sorts' => $sort
            ]);
    }
}
