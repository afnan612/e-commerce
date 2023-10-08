<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use App\Http\Requests\sliders;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{       use ImageUploadTrait;

    public function index()
    {

        $sliders = Slider::latest()->paginate(5);

        return view('slider.slider', compact('sliders'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('slider.slider');

    }

    public function store(sliders $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }
        slider::create($data);
//        return redirect()->back()->with('success', 'تم إنشاء السلايدر بنجاح!');

        return redirect()->route('slider.index')
            ->with('success', 'تم الإنشاء بنجاح.');
    }

    public function show(Slider $slider)
    {
        //
    }

    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(sliders $request, $id)
    {
        $data = $request->validated();
        $slider = Slider::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }

        $slider->update($data);

        return redirect()->route('slider.index')
            ->with('success', 'تم التعديل بنجاح.');
//        return redirect()->back()->with('success', 'تم إنشاء السلايدر بنجاح!');


    }

    public function destroy(Slider $slider)
    {
        if (file_exists($slider->image)) {
            unlink($slider->image);
        }

        $slider->delete();

        return redirect()->route('slider.index')
            ->with('success', 'تم الحذف بنجاح.');

    }

    public function home()
    {
        return view('home');
    }



}
