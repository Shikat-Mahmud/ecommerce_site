<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    public function index()
    {
        if (auth()->check() && auth()->user()->hasAnyPermission(['create-category', 'show-category', 'edit-category', 'delete-category'])) {
            $categories = Category::all();
            return view('admin.main.category.index', compact('categories'));
        } else {
            return redirect()->back()->with('error', 'You do not have permission to Categories.');
        }
    }

    public function create()
    {
        if (auth()->user()->can('create-category')) {
            return view('admin.main.category.create');
        } else {
            return redirect()->back()->with('error', 'You do not have permission to add category.');
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $inputs = $request->all();
            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('categories', 'public');
                $inputs['image'] = $imagePath;
            }

            $category = new Category();
            $category->fill($inputs);
            $category->save();

            return redirect()->route('categories.index')->with('success', 'Category create successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', $e->getMessage());
        }
    }

    public function show(string $id)
    {
        if (auth()->user()->can('show-category')) {
            $category = Category::findOrFail($id);
            return view('admin.main.category.show', compact('category'));
        } else {
            return redirect()->back()->with('error', 'You do not have permission to show category.');
        }
    }


    public function edit(string $id)
    {
        if (auth()->user()->can('edit-category')) {
            $categories = Category::find($id);
            return view('admin.main.category.edit', compact('categories'));
        } else {
            return redirect()->back()->with('error', 'You do not have permission to edit category.');
        }
    }


    public function update(Request $request, string $id)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $category = Category::find($id);
            
            $category->name = $request->input('name');
            $category->status = $request->input('status');

            if ($request->hasFile('image')) {
                if ($category->image) {
                    Storage::delete($category->image);
                }

                $imagePath = $request->file('image')->store('categories', 'public');
                $category->image = $imagePath;
            }

            $category->save();

            return redirect()->route('categories.index')->with('success', 'Category updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
    public function destroy(string $id)
    {
        if (auth()->user()->can('delete-category')) {
            Category::find($id)->delete();
            return redirect()->back()->with('success', 'Category deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'You do not have permission to delete category.');
        }
    }
}
