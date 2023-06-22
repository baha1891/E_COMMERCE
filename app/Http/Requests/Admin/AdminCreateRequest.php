<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class AdminCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'first_name_en'=>'required',
            'first_name_ar'=>'required',
            'last_name_en'=>'required',
            'last_name_ar'=>'required',
            'email'=>'required|email|unique:admins,email',
            'password'=>'required|min:3|max:20',
            'phone'=>'required|min:10|unique:admins,phone',
        ];
    }
}
