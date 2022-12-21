<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;
use File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $product = Product::all();

        return view('admin.products.product',compact('product',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::with('children')->get();
        return view('admin.products.product_add',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $product = new Product();
       $product->title=$request->title;
       $product->description=$request->description;
       $product->price=$request->price;
       $product->quantity=$request->quantity;
       $product->discount_price=$request->discount_price;
       $product->category_id=$request->category_id;


       if($request->hasFile('image')){
      $image=$request->image;
      $imeganame=time().'.'.$image->getClientOriginalExtension();
      $request->image->move(public_path('uploads'),$imeganame);
      $product->image='uploads/'.$imeganame;
}
      $product->save();


       //$all = $request->except('token');
       //dd($all);

       return redirect()->route('product.index')->with('message','Ürün başarıyla eklendi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $product = Product::find($id);
      $data= Category::with('children')->get();
        return view('admin.products.product_add_edit',compact('product','data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $product = Product::find($id);
      $product->title=$request->title;
      $product->description=$request->description;
      $product->price=$request->price;
      $product->quantity=$request->quantity;
      $product->discount_price=$request->discount_price;
      $product->category_id=$request->category_id;

      if($request->hasFile('image')){
      $image=$request->image;
      $imeganame=time().'.'.$image->getClientOriginalExtension();
      $request->image->move(public_path('uploads'),$imeganame);
      $product->image='uploads/'.$imeganame;
}
      $product->save();

      return redirect()->route('product.index')->with('message','Ürün başarıyla güncellendi.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      DB::table('products')->where('id', '=', $id)->delete();
      return redirect()->route('product.index');

    }
}
