<?php

namespace App\Http\Controllers;

use App\Http\Requests\SettingRequest;
use App\Models\Setting;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use ImageUploadTrait;

    public function index()
    {

        $setting = Setting::first();

        return view('setting.setting', compact('setting'));
    }

    public function update(SettingRequest $request)
    {
        $data = $request->validated();
        $setting = Setting::first();

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $data ['logo'] = $this->saveImages($file, 'images');
        }
        return $request;
        $setting->update($data);
        return redirect()->route('setting.index')
            ->with('success', 'تم التعديل بنجاح.');
    }

}
