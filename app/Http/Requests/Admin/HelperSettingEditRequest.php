<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class HelperSettingEditRequest extends FormRequest
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
        $id = $this->route('helperSetting');
        return [
            'image'         => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'],
            'title'         => 'required',
            'description'   => 'required',
            'sort'          => 'required|unique:helper_settings,sort,'.$id,
        ];
    }
}
