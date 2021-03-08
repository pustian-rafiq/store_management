<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin\Category;
use Illuminate\Http\Response;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $categories = Category::orderby('id','DESC')->get();
         return view('admin.category.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
        'category_name' => 'required|unique:categories|max:50|min:2',

    ]);
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        flash('Category created successfully')->success();
        return Redirect()->route('category.index');

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
        $category = Category::findOrFail($id);
        return view('admin.category.edit', compact('category'));
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
        //validation
         $validated = $request->validate([
        'category_name' => 'required|max:50|min:2|unique:categories,category_name,'. $id
        //ekhane $id er category name bade onno category name gulor sathe compare korbe j unique hocce ki na
         ]);
         $category = Category::findOrFail($id);
         $category->category_name = $request->category_name;
         $category->save();

         flash('Category updated successfully')->success();
         return Redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        flash('Category deleted successfully')->success();
        return Redirect()->route('category.index');
    }
    //Handle ajac request for categories

    public function getCategoriesJson(){
        $categories = Category::all();

        return response()->json([
            'success'   => true,
            'data'      => $categories
        ], Response::HTTP_OK);
    }
}
