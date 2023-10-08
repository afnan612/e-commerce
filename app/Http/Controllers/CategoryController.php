<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Traits\ImageUploadTrait;
//use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $categories = Category::latest()->paginate(5);

        return view('categories.categories', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        return view('categories.categories');

    }

    public function store(CategoryRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }
        Category::create($data);

        return redirect()->route('categories.index')
            ->with('success', 'تم الإنشاء بنجاح.');
    }

    public function show(Category $category)
    {
        //
    }

    public function edit(Category $category)
    {
        //
    }

    public function update(CategoryRequest $request, $id)
    {
        $data = $request->validated();
        $category = Category::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }

            $category->update($data);

            return redirect()->route('categories.index')
                ->with('success', 'تم التعديل بنجاح.');

        }

    public function destroy(Category $category)
    {
        if (file_exists($category->image)) {
            unlink($category->image);
        }

        $category->delete();

        return redirect()->route('categories.index')
            ->with('success', 'تم الحذف بنجاح.');
    }
}
