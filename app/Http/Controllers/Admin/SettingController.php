<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\Admin\SettingCreateRequest;
use App\Http\Requests\Admin\SettingEditRequest;

class SettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function create()
    {
        $setting  = Setting::where('disabled', false)->first();
        $active         = 'setting';
        $title          = 'Settings';
        $formTitle      = 'Setting';
        $route          = route('admin.setting.update', [$setting->id]);
        $method         = 'PUT';
        return view('admin.setting.form', compact('active', 'title', 'formTitle', 'route', 'method', 'setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SettingEditRequest $request, string $id)
    {
        $validated = $request->validated();
        if($request->hasFile('image')) {
            $validated['image'] = uploadSingleFile($request->file('image'), "admin/Settings", '300');
        }
        $setting = Setting::findOrFail($id)->update($validated);
        return redirect()->route('admin.setting.create')->with(['success_msg'=> 'Setting updated successfully!']);
    }

}
