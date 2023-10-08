<?php

namespace App\Http\Controllers;

use App\Http\Requests\SponsorsRequest;
use App\Models\Sponsors;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SponsorsController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {
        $sponsors = Sponsors::latest()->paginate(5);

        return view('sponsors.sponsors', compact('sponsors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    public function create()
    {
        return view('sponsors.sponsors');

    }

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

    public function show(Sponsors $sponsors)
    {
        //
    }

    public function edit(Sponsors $sponsors)
    {
        //
    }

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
