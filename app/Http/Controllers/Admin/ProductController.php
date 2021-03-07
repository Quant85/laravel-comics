<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Credit;
use App\Rated;
use App\Serie;
use App\Size;
use App\Talent;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        $rateds = Rated::all();
        $series = Serie::all();
        $sizes = Size::all();
        $talents = Talent::all();
        return view('admin.products.create', compact('rateds','categories','series','sizes','talents'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());

        $request ['slug'] = Str::slug($request->title);
        $validateDate = $request->validate([
            'title'=>'required',
            'slug' => 'required',
            'category_id' => 'required',
            'serie_id' => 'required',
            'rated_id' => 'nullable',
            'size_id' => 'nullable',
            'volume' => 'required',
            'cover' => 'nullable | mimes:jpeg,jpg,png,gif | max:500',
            'description'=>'nullable',
            'page_count'=>'nullable',
            'price'=>'nullable',
            'sale_date'=>'nullable',
            'available'=>'required',
            ]);

            if ($request->cover) {
                # code...
                $cover = Storage::put('cover_imgs', $request->cover);
                $validateDate['cover'] = $cover;
            }

            //dd($validateDate);
            Product::create($validateDate);
        
        $product = Product::orderBy('id','desc')->first();
        $product->talents()->attach($request->talents);
        return redirect('/admin/products')->with('success', 'Post saved!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $products, Serie $series, Rated $rateds, Size $sizes, Talent $talents, Category $categories)
    {
        //
        return view('admin.products.edit', compact('products','series','rateds','sizes','talents','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
        $request ['slug'] = Str::slug($request->title);
        $validateDate = $request->validate([
            'title'=>'required',
            'slug' => 'required',
            'category_id' => 'required',
            'serie_id' => 'required',
            'rated_id' => 'nullable',
            'size_id' => 'nullable',
            'volume' => 'required',
            'cover' => 'nullable | mimes:jpeg,jpg,png,gif | max:500',
            'description'=>'nullable',
            'page_count'=>'nullable',
            'price'=>'nullable',
            'sale_date'=>'nullable',
            'available'=>'required',
            ]);

            if ($request->cover) {
                # code...
                $cover = Storage::put('cover_imgs', $request->cover);
                $validateDate['cover'] = $cover;
            }

            //dd($validateDate);
            Product::create($validateDate);
        
        $product = Product::orderBy('id','desc')->first();
        $product->talents()->attach($request->talents);
        return redirect('/admin/products')->with('success', 'Post saved!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
