<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class CategoryController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $categories = Category::latest()->get();
    return view('backend.categories.index', compact('categories'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    return view('backend.categories.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(Request $request)
  {
    $validated = $request->validate([
      'name' => 'required|unique:categories|min:5|max:200',
      'icon' => 'required|min:5',
    ]);

    Category::insert([
      'name' => $request->name,
      'icon' =>  $request->icon,
    ]);

    $notification = array(
      'message' =>  'Category created succesfully',
      'alert-type'  =>  'success'
    );

    return redirect()->route('categories.index')->with($notification);
  }

  /**
   * Display the specified resource.
   */
  public function show(PropertyType $propertyType)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Category $category)
  {
    return view('backend.categories.edit', compact('category'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request, Category $category)
  {
    $validated = $request->validate([
      'name' => ['required', 'min:5', 'max:200', Rule::unique('categories')->ignore($category->id)],
      'icon' => ['required', 'min:5'],
    ]);

    $category->update([
      'name' => $request->name,
      'icon' =>  $request->icon,
    ]);

    $notification = array(
      'message' =>  'Category updated succesfully',
      'alert-type'  =>  'success'
    );

    return redirect()->back()->with($notification);
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Category $category)
  {
    //$category->delete();

    $notification = array(
      'message' =>  'Category deleted succesfully',
      'alert-type'  =>  'success'
    );

    return redirect()->back()->with($notification);
  }
}
