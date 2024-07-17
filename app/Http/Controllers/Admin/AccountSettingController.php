<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Admin\AccountSettingEditRequest;

class AccountSettingController extends Controller
{
    public function profileEdit(){
        $admin    = auth()->guard('admin')->user();
        $active     = 'accountSetting';
        $title      = 'Account Setting';
        $formTitle  = 'Edit Profile';
        $route      = route('admin.profile.update', [$admin->id]);
        $method     = 'PUT';
        return view('admin.accountSetting.form', compact('active', 'title', 'formTitle', 'route', 'method', 'admin'));
    }
    public function profileUpdate(AccountSettingEditRequest $request, string $id)
    {
        $validated = $valdata = $request->validated();
        if($request->hasFile('profile')) {
            $validated['profile'] = uploadSingleFile($request->file('profile'), "admin/profiles", '300');
        }
        foreach($valdata as $key => $value){
            if($valdata[$key] == null){
                unset($validated[$key]);
            }
        }
        $admin = Admin::findOrFail($id)->update($validated);
        return redirect()->back()->with(['success_msg'=> 'Profile updated successfully!']);
    }


    public function passwordEdit(){
        $admin    = auth()->guard('admin')->user();
        $active     = 'accountSetting';
        $title      = 'Account Setting';
        $formTitle  = 'Change Password';
        $route      = route('admin.password.update', [$admin->id]);
        $method     = 'PUT';
        return view('admin.accountSetting.password_form', compact('active', 'title', 'formTitle', 'route', 'method', 'admin'));
    }
    public function passwordUpdate(AccountSettingEditRequest $request, string $id)
    {
        $validated = $valdata = $request->validated();
        if($request->hasFile('password')) {
            $validated['password'] = uploadSingleFile($request->file('password'), "admin/profiles", '300');
        }
        foreach($valdata as $key => $value){
            if($valdata[$key] == null){
                unset($validated[$key]);
            }
        }
        if(Hash::check($validated['old_password'], Admin::findOrFail($id)->password)){
            unlink($validated['old_password']);
            $admin = Admin::findOrFail($id)->update($validated);
            return redirect()->back()->with(['success_msg'=> 'Password updated successfully!']);
        }else{
            return redirect()->back()->with(['error_msg'=> 'Your old password is invalid!']);
        }
    }
}
