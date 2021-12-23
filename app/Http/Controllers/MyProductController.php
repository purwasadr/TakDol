<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class MyProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller.myproducts.index', [
            'title' => 'Seller',
            'products' => Product::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.myproducts.create', [
            'title' => 'Seller',
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
        // rules uinque:{tabel} diisi dengan nama tabel bukan model
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'slug' => 'required|unique:products',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('img_products');
        }

        $validateData['user_id'] = auth()->user()->id;

        Product::create($validateData);

        return redirect('/seller/myproducts')->with('success', "New post has been added!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $myproduct)
    {
        return view('show', [
            'title' => $myproduct->title,
            'product' => $myproduct
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @param  \App\Models\Product  $myproduct *Harus sama dengan lastpath route jika menggunakan Route::resource
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $myproduct)
    {
        return view('seller.myproducts.edit', [
            'title' => "Edit Product",
            'product' => $myproduct,
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
    public function update(Request $request, Product $myproduct)
    {
        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required',
            'price' => 'required',
            'image' => 'image|file|max:1024',
            'description' => 'required'
        ];

        if ($request->slug != $myproduct->slug) {
            $rules['slug'] = 'required|unique:products';
        }

        $validateData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('myproduct-images');
        }

        $validateData['user_id'] = auth()->user()->id;

        Product::where('id', $myproduct->id)->update($validateData);

        return redirect('/seller/myproducts')->with('success', "myproduct has been updated!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function checkSlug(Request $request)
    {
        // SlugService juga sudah mengecek keunikan slug
        $slug = SlugService::createSlug(Product::class, 'slug', $request->title);
        return response()->json(['slug' => $slug]);
    }
}
