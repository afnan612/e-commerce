<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use App\Http\Requests\sliders;
use Illuminate\Support\Facades\Storage;


class SliderController extends Controller
{       use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//      return view('slider.slider');

        $sliders = Slider::all(); // استرجاع بيانات السلايدر من قاعدة البيانات

        return view('slider.slider', compact('sliders')); // تمرير البيانات إلى القالب
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.slider');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if (file_exists($slider->image)) {
            unlink($slider->image);
        }

        $slider->delete();

        return redirect()->route('slider.index')
            ->with('success', 'تم الحذف بنجاح.');
//        $sliders = slider::findOrFail($request->id)->delete();

    }
}
