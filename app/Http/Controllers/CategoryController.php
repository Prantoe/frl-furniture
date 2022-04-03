<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Validator;
use DB;

class CategoryController extends Controller
{
     public function index()
     {
     $categorys = Category::latest()->get();
     $userName = auth()->user()->name;
      return view('Categorys.index',compact('categorys','userName'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
     }

      public function create()
      {
      return view('Categorys.create');
      }

      public function store(Request $request)
      {
      $this->validate($request, [
      'name' => 'required|string|max:155',
      ]);

      $category = Category::create([
      'name' => $request->name,
      ]);

      if ($category) {
      return redirect()
      ->route('categorys.index')
      ->with([
      'success' => 'New category has been created successfully'
      ]);
      } else {
      return redirect()
      ->back()
      ->withInput()
      ->with([
      'error' => 'Some problem occurred, please try again'
      ]);
      }
      }

      public function show(Category $category)
      {
      return view('Categorys.show', compact('category'));
      }

      /**
      * Show the form for editing the specified resource.
      *
      * @param \App\Models\Product $product
      * @return \Illuminate\Http\Response
      */
      public function edit(Category $category)
      {
      return view('Categorys.edit', compact('category'));
      }
      /**
      * Update the specified resource in storage.
      *
      * @param \Illuminate\Http\Request $request
      * @param \App\Models\product $product
      * @return \Illuminate\Http\Response
      */
      public function update(Request $request, Category $category)
      {
      $validator = Validator::make($request->all(), [
     
      'name' => 'required',
     

      ]);
      if($validator->fails()){
      return redirect('categorys')->with('error', 'Oops, Terjadi masalah saat menambahkan data!');
      }
      $category->update($request->all());

      return redirect('categorys')
      ->with('success', 'Category updated successfully');
      }
      /**
      * Remove the specified resource from storage.
      *
      * @param \App\Models\Product $product
      * @return \Illuminate\Http\Response
      */
      public function destroy(Category $category)
      {
      $category->delete();

      return redirect('categorys')
      ->with('success', 'Categorys deleted successfully');
      }
}