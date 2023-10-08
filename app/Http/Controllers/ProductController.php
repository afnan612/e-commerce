<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $categories = Category::all();
        $products = Product::latest()->paginate(5);
        return view('products.products', compact('products', 'categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        //
    }

    public function store(ProductRequest $request)
    {
        $data = $request->validated();

        $data['final_price'] = $data['price'] - $data['discount'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }

        Product::create($data);

        return redirect()->route('products.index')
            ->with('success', 'تم الإنشاء بنجاح.');
    }

    public function show(Request $product)
    {
        //
    }

    public function edit(Product $product)
    {
        //
    }

    public function update(ProductRequest $request, $id)
    {
        $data = $request->validated();
        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }
        $product->update($data);

        return redirect()->route('products.index')
            ->with('success', 'تم التعديل بنجاح.');
    }

    public function destroy(Product $product)
    {
        if (file_exists($product->image)) {
            unlink($product->image);
        }

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'تم الحذف بنجاح.');
    }
}
