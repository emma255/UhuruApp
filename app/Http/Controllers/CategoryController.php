<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('webcontents.category-list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('webcontents.category-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'categoryname'=>'required',
            'description'=>'required',
        ]);
        $category = new Category;

        $category->categoryname = $request->categoryname;
        $category->description = $request->description;

        $category->save();

        return redirect()->route('listCategories');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $category = Category::find($request->id);

        return view('webcontents.category-show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $category = Category::find($request->id);

        return view('webcontents.category-edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'categoryname'=>'required',
            'description'=>'required',
        ]);
        $category = Category::find($request->id);

        $category->categoryname = $request->categoryname;
        $category->description = $request->description;

        $category->save();

        return redirect()->route('listCategories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $deleted = Category::where('id',$request->id)->delete();

        return redirect()->route('listCategories');
    }
}
