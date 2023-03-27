<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Show the form for creating the resource.
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store the newly created resource in storage.
     */
    public function store(Request $request)
    {
        //    dd($request->all());

        $data = $request->validate([
            'name' => 'required'
        ]);

        Category::create($data);

        return redirect('admin/categories')->with('success', 'Category has been created Successfully !');
    }

    /**
     * Display the resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the resource.
     */
    public function edit(Category $category)
    {
        // dd($category);
        return view('admin.categories.edit', [
            'category' => $category
        ]);
    }

    /**
     * Update the resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'name' => 'required'
        ]);

        $category->update($data);

        return redirect('/admin/categories')->with('success', 'Category has been Updated Successfully !');
    }

    /**
     * Remove the resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return back()->with('success', 'Category has been deleted successfully!');
    }
}
