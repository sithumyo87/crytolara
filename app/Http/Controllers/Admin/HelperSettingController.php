<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HelperSetting;
use App\Http\Requests\Admin\HelperSettingCreateRequest;
use App\Http\Requests\Admin\HelperSettingEditRequest;

class HelperSettingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        $helperSettings = HelperSetting::getPagination();
        $start          = ((($request->page ?? 1) * paginateCount()) - paginateCount()) + 1;
        $active         = 'helperSetting';
        $title          = 'Helper Settings';
        return view('admin.helperSetting.index', compact('active', 'title', 'helperSettings', 'start'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $active     = 'helperSetting';
        $title      = 'Helper Settings';
        $formTitle  = 'Create New Helper Setting';
        $route      = route('admin.helperSetting.store');
        $method     = 'POST';
        return view('admin.helperSetting.form', compact('active', 'title', 'formTitle', 'route', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HelperSettingCreateRequest $request)
    {
        $validated = $request->validated();
        if($request->hasFile('profile')) {
            $validated['image'] = uploadSingleFile($request->file('image'), "admin/helperSettings", '300');
        }
        $helperSetting = HelperSetting::create($validated);
        return redirect()->route('admin.helperSetting.index')->with(['success_msg'=> 'helperSetting created successfully!']);
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
    public function edit(string $id)
    {
        $helperSetting  = HelperSetting::where('disabled', false)->findOrFail($id);
        $active         = 'helperSetting';
        $title          = 'Helper Settings';
        $formTitle      = 'Edit Helper Setting';
        $route          = route('admin.helperSetting.update', [$helperSetting->id]);
        $method         = 'PUT';
        return view('admin.helperSetting.form', compact('active', 'title', 'formTitle', 'route', 'method', 'helperSetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HelperSettingEditRequest $request, string $id)
    {
        $validated = $request->validated();
        if($request->hasFile('image')) {
            $validated['image'] = uploadSingleFile($request->file('image'), "admin/helperSettings", '300');
        }
        $helperSetting = HelperSetting::findOrFail($id)->update($validated);
        return redirect()->route('admin.helperSetting.index')->with(['success_msg'=> 'helperSetting updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $helperSetting = HelperSetting::findOrFail($id)->update(['disabled' => true]);
        return redirect()->back()->with(['success_msg'=> 'helperSetting deleted successfully!']);
    }

}
