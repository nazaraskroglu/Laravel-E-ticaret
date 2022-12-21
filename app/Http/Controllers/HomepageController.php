<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Models\Shopcart;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Image;




class HomepageController extends Controller
{
   public static function  categorylist()
   {
       return Category::with('children')->where('parent_id','=',0)->get();

   }


  public function index()
  {
      $product=Product::orderBy('created_at','DESC')->paginate(6);
      return view('layouts.homepage',compact('product'));
  }

  public function show()
  {
      $product=Product::orderBy('created_at','DESC')->paginate(12);
      return view('home.product_page',compact('product'));
  }

  public function checkout()
  {
      $data=Shopcart::where('user_id',Auth::user()->id)->get();
      return view('home.product_checkout',compact('data'));
  }


  public function detail($id)
  {
      $product=Product::find($id);
      $image = Image::where('product_id',$id)->get();
      return view('home.product_detail',compact('product','image'));
  }

/*
   public function search(Request $request){

     $search= $request->input('search');
     $count= $Product::where('title', 'like', '%'.$search.'%')->get()->count();
      if($count==1)
      {
        $product= Product::where('title','like','%'.$search.'%')->first();
        return redirect()->route('product.detail',['id'=>$product->id,'slug'=>$product->slug],compact('product'));
      }
      else{
        return redirect()->route('product.show',['id'=>$product->id,'slug'=>$product->slug],compact('product'));
      }
  }

   public function productlist($search){

      $product= $Product::where('title', 'like', '%'.$search.'%')->get();

      return view('home.search_product', ['search'=>$search,'product'=>$product]);


 } */



}
