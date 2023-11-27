<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class OfferController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $offer = Offer::first();

        return view('offers.offers', compact('offer'));
    }

    public function update(OfferRequest $request)
    {
        $data = $request->validated();
        $offer = Offer::first();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }
        $offer->update($data);
        return redirect()->route('offers.index')
            ->with('success', 'تم التعديل بنجاح.');
    }

}
