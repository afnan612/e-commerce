<?php

namespace App\Http\Controllers;

use App\Http\Requests\adminrequest;
use App\Models\Admin;
use App\Models\Slider;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller

{       use ImageUploadTrait;


    public function index()
    {
        $admins = Admin::latest()->paginate(5);

        return view('admins.admin', compact('admins'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admins.admin');

    }

    public function store(adminrequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
        }
        admin::create($data);


        return redirect()->route('admin.index')
            ->with('success', 'تم الإنشاء بنجاح.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(adminrequest $request, $id)
    {
        $data = $request->validated();
        $admin = Admin::findOrFail($id);


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images/admins');
        }
        if ($request->password && $request->password != null) {
            $data ['password'] = Hash::make($request->password);
        }
        else{
            unset($data['password']);

        }

        $admin->update($data);

        return redirect()->route('admin.index')
            ->with('success', 'تم التعديل بنجاح.');
    }

    public function destroy(admin $admin)
    {
        if (file_exists($admin->image)) {
            unlink($admin->image);
        }

        $admin->delete();

        return redirect()->route('admin.index')
            ->with('success', 'تم الحذف بنجاح.');
    }
}
