<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\AdminCreateRequest;
use App\Http\Requests\Admin\AdminEditRequest;

class AdminController extends Controller
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
        $admins      = Admin::getPagination();
        $start       = ((($request->page ?? 1) * paginateCount()) - paginateCount()) + 1;
        $active      = 'admins';
        $title       = 'Admins';
        return view('admin.admin.index', compact('active', 'title', 'admins', 'start'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $active     = 'admins';
        $title      = 'Admins';
        $formTitle  = 'Create New Admin';
        $route      = route('admin.admin.store');
        $method     = 'POST';
        return view('admin.admin.form', compact('active', 'title', 'formTitle', 'route', 'method'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminCreateRequest $request)
    {
        $validated = $request->validated();
        if($request->hasFile('profile')) {
            $validated['profile'] = uploadSingleFile($request->file('profile'), "admin/profiles", '300');
        }
        $admin = Admin::create($validated);
        return redirect()->route('admin.admin.index')->with(['success_msg'=> 'Admin created successfully!']);
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
        $admin      = Admin::where('disabled', false)->findOrFail($id);
        $active     = 'admins';
        $title      = 'Admins';
        $formTitle  = 'Edit Admin';
        $route      = route('admin.admin.update', [$admin->id]);
        $method     = 'PUT';
        return view('admin.admin.form', compact('active', 'title', 'formTitle', 'route', 'method', 'admin'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminEditRequest $request, string $id)
    {
        $validated = $request->validated();
        if($request->hasFile('profile')) {
            $validated['profile'] = uploadSingleFile($request->file('profile'), "admin/profiles", '300');
        }
        $admin = Admin::findOrFail($id)->update($validated);
        return redirect()->route('admin.admin.index')->with(['success_msg'=> 'Admin updated successfully!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $admin = Admin::findOrFail($id)->update(['disabled' => true]);
        return redirect()->back()->with(['success_msg'=> 'Admin deleted successfully!']);
    }

}
