<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    protected $appends = [
        'getParentsTree'
    ];

    public static function getParentsTree($category,$title)
    {
        if($category->parent_id == 0)
        {
            return $title;
        }
        $parent = Category::find($category->parent_id);
        $title = $parent->title.'>'.$title;

        return CategoryController::getParentsTree($parent,$title);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $category= Category::with('children')->get();
      return view('admin.categories.category', compact('category'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category= Category::with('children')->get();

      return view('admin.categories.category_add',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $request->validate([
         'title'=>'required|min:3',
       ]);

      $category = new Category();

      $category->title = $request->input('title');
      $category->slug = $request->input('slug');
      $category->status = $request->input('status') == TRUE?'1':'0' ;
      $category->meta_title = $request->input('meta_title');
      $category->meta_descrip = $request->input('meta_descrip');
      $category->meta_keywords = $request->input('meta_keywords');

      $category->save();
      #$category= Category::whereNullwith('categories')->get();
      #dd($category);

      return redirect()->route('category.index')->with('status'."Kategori başarıyla oluşturuldu");

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

        $category = Category::find($id);
        $data= Category::with('children')->get();
        return view('admin.categories.category_add_edit',compact('category','data'));
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
       $category = Category::find($id);
       $category->title = $request->input('title');
       $category->slug = $request->input('slug');
       $category->status = $request->input('status') == TRUE?'1':'0' ;
       $category->meta_title = $request->input('meta_title');
       $category->meta_descrip = $request->input('meta_descrip');
       $category->meta_keywords = $request->input('meta_keywords');
       $category->save();
       return redirect()->route('category.index')->with('status'."Kategori başarıyla oluşturuldu");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('categories')->where('id', '=', $id)->delete();
       return redirect()->route('category.index');
    }
}
