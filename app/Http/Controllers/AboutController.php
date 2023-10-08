<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutRequest;
use App\Models\About;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $about = About::first();

        return view('about.about', compact('about'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(About $about)
    {
        //
    }

    public function edit(AboutRequest $request)
    {
        $data = $request->validated();

        $about = About::first();

        $images = [];
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file)
//            $file = $request->file('image');
                $images[] = $this->saveImages($file, 'images');
        }

        $data['image'] = $images;
        $about->update($data);

        return redirect()->route('about.index')
            ->with('success', 'تم التعديل بنجاح.');
    }


    public function update(AboutRequest $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
