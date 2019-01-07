<?php

namespace App\Http\Controllers\Admin;

use App\Models\Photo;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Product $product
     * @return void
     */
    public function index(Product $product)
    {
//        $photos = $product->photos;
        return view('admin.photo.photo', ['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Product $product
     * @param  \Illuminate\Http\Request $request
     * @return void
     */
    public function store(Product $product, Request $request)
    {
        $file = $request->file('image');
//       $file->move(storage_path('app/images'), $file->getClientOriginalName());
//       $path = '/storage/app/images/'. $file->getClientOriginalName();
        $path = $file->store('public/images');
        $photo = new Photo();
        $photo->product_id = $product->id;
        $photo->path = str_replace('public/', '', $path);
        $photo->save();


        return redirect()->refresh();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
