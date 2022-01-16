<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use \Cviebrock\EloquentSluggable\Services\SlugService;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboardAdmin.products.index', [
            'products' => Product::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboardAdmin.products.create',[
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required',
            'category_id'=> 'required',
            'slug' => 'required|unique:products',
            'link' => 'required',
            'image' => 'image',
            'description' => 'required',
            'price' => 'required'
        ]);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('product-images');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->description), 20);

        Product::create($validateData);

        return redirect('/dashboardAdmin/products')->with('suscess','product added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('dashboardAdmin.products.edit',[
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'name' => 'required',
            'category_id'=> 'required',
            'link' => 'required',
            'image' => 'image',
            'description' => 'required',
            'price' => 'required'
        ];

        if($request->slug != $product->slug){
            $rules['slug'] = 'required|unique:products';
        }

        $validateData = $request->validate($rules);

        if($request->file('image')){
            $validateData['image'] = $request->file('image')->store('product-images');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($request->description), 20);

        Product::where('id',$product->id)
            ->update($validateData);

        return redirect('/dashboardAdmin/products')->with('suscess','product added');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect('/dashboardAdmin/products')->with('suscess','product adeleted');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Product::class, 'slug', $request->name);
        return response()->json(['slug' => $slug]);
    }
}
