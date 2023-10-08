<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReviewRequest;
use App\Models\Review;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {

        $reviews = Review::latest()->paginate(5);

        return view('reviews.reviews', compact('reviews'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        //
    }

    public function store(ReviewRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }
        Review::create($data);

        return redirect()->route('reviews.index')
            ->with('success', 'تم الإنشاء بنجاح.');
    }

    public function show(Review $review)
    {
        //
    }

    public function edit(Review $review)
    {
        //
    }

    public function update(ReviewRequest $request, $id)
    {
        $data = $request->validated();
        $review = Review::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }

        $review->update($data);

        return redirect()->route('reviews.index')
            ->with('success', 'تم التعديل بنجاح.');

    }

    public function destroy(Review $review)
    {
        if (file_exists($review->image)) {
            unlink($review->image);
        }

        $review->delete();

        return redirect()->route('reviews.index')
            ->with('success', 'تم الحذف بنجاح.');
    }
}
