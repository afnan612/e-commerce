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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::all();

        return view('admins.admin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.admin');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(adminrequest $request, $id)
    {
        $data = $request->validated();
        $admin = Admin::findOrFail($id);


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $data ['image'] = $this->saveImages($file, 'images');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
