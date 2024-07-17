<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AwardSetting;
use App\Http\Requests\Admin\AwardSettingCreateRequest;
use App\Http\Requests\Admin\AwardSettingEditRequest;

class AwardSettingController extends Controller
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
        $awardSettings = AwardSetting::getPagination();
        $start          = ((($request->page ?? 1) * paginateCount()) - paginateCount()) + 1;
        $active         = 'awardSetting';
        $title          = 'Award Settings';
        return view('admin.awardSetting.index', compact('active', 'title', 'awardSettings', 'start'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $active     = 'awardSetting';
        $title      = 'Award Settings';
        $formTitle  = 'Create New Helper Setting';
        $route      = route('admin.awardSetting.store');
        $method     = 'POST';
        return view('admin.awardSetting.form', compact('active', 'title', 'formTitle', 'route', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AwardSettingCreateRequest $request)
    {
        $validated = $request->validated();
        $awardSetting = AwardSetting::create($validated);
        return redirect()->route('admin.awardSetting.index')->with(['success_msg'=> 'AwardSetting created successfully!']);
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
        $awardSetting  = AwardSetting::where('disabled', false)->findOrFail($id);
        $active         = 'awardSetting';
        $title          = 'Award Settings';
        $formTitle      = 'Edit Helper Setting';
        $route          = route('admin.awardSetting.update', [$awardSetting->id]);
        $method         = 'PUT';
        return view('admin.awardSetting.form', compact('active', 'title', 'formTitle', 'route', 'method', 'awardSetting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AwardSettingEditRequest $request, string $id)
    {
        $validated = $request->validated();
        $awardSetting = AwardSetting::findOrFail($id)->update($validated);
        return redirect()->route('admin.awardSetting.index')->with(['success_msg'=> 'AwardSetting updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $awardSetting = AwardSetting::findOrFail($id)->update(['disabled' => true]);
        return redirect()->back()->with(['success_msg'=> 'AwardSetting deleted successfully!']);
    }

}
