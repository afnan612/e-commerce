<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
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
//        return $request;
        $data = $request->validated();

        $data['final_price'] = $data['price'] - $data['discount'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }
        $product = Product::create($data);

//         save images of the products
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $data['product_id'] = $product->id;
                $data['image'] = $this->saveImages($image, 'images');
//
//                'image' => $data['image'],
//                    'product_id' => $data['$product->id]

                ProductImage::create([
//                    'image' => $image,
//                    'product_id' => $product->id

                    'image' => $data['image'],
                    'product_id' => $data['product_id']

                ]);
            }
        }

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

        $data['final_price'] = $data['price'] - $data['discount'];


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }
        $product->update($data);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $data['product_id'] = $product->id;
                $data['image'] = $this->saveImages($image, 'images');

                ProductImage::create([
                    'image' => $data['image'],
                    'product_id' => $data['product_id']
                ]);
            }
        }

        return redirect()->route('products.index')
            ->with('success', 'تم التعديل بنجاح.');
    }

    public function destroy(Request $request, Product $product)
    {
        if (file_exists($product->image)) {
            unlink($product->image);
        }

        foreach ($product->images as $image) {
            if (file_exists($image->image)) {
                unlink($image->image);
            }
        }

        ProductImage::where('product_id', $product->id)->delete();

        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'تم الحذف بنجاح.');
    }
}
