<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AccountSettingEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::guard('admin')->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $id = $this->route('id');
        return [
            'name'          => 'nullable',
            'username'      => 'nullable|unique:admins,username,'.$id,
            'email'         => 'nullable|unique:admins,email,'.$id,
            'old_password'  => 'nullable|min:8|max:50',
            'password'      => 'nullable|min:8|max:50|confirmed',
            'profile'       => ['nullable', 'image', 'mimes:jpg,jpeg,png,gif', 'max:2048'], 
        ];
    }
}
