<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Shopcart;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data=Shopcart::where('user_id',Auth::user()->id)->get();
        if('user_id'==null){
            return redirect('home.product_yourcart');
        }
        return view('home.product_yourcart',compact('data'));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request,$id )
    {

        $data = Shopcart::where('product_id',$id)->where('user_id', Auth::id())->first();
        if($data){
            $data->quantity = $data->quantity + $request->input('quantity');
        }
        else
        {
            $data = new Shopcart;
            $data->product_id = $id;
            $data->user_id = Auth::user()->id;
            $data->quantity = $request->input('quantity');
        }
        $data->save();

        return redirect()->back();
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function edit(Shopcart $shopcart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shopcart $shopcart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shopcart  $shopcart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shopcart $shopcart,$id)
    {
        $data=Shopcart::find($id);
        $data->delete();
        return redirect()->back();
    }

}
