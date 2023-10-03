<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorsRequest;
use App\Models\Sponsors;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    use ImageUploadTrait;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sponsors = Sponsors::all();

        return view('sponsors.sponsors', compact('sponsors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sponsors.sponsors');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SponsorsRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }

        Sponsors::create($data);

        return redirect()->route('sponsors.index')
            ->with('success', 'تم الإنشاء بنجاح.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function show(Sponsors $sponsors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function edit(Sponsors $sponsors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function update(SponsorsRequest $request, $id)
    {
        $data = $request->validated();
        $sponsors = Sponsors::findOrFail($id);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }
        $sponsors->update($data);

        return redirect()->route('sponsors.index')
            ->with('success', 'تم التعديل بنجاح.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sponsors  $sponsors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sponsors $sponsors,$id)
    {
        $row = Sponsors::findOrFail($id);

        if (file_exists($row->image)) {
            unlink($row->image);
        }
        $row->delete();

        return redirect()->route('sponsors.index')
            ->with('success', 'تم الحذف بنجاح.');
    }
}
