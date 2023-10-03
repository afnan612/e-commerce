<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class adminrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        if (request()->isMethod('put')) {
            return [
                'name' => 'required',
                'email' => "required|unique:admins,email,". $this->id,
                'image' => 'nullable|image',
                'password' => 'nullable|min:6',
            ];
        }

        else {
            return [
                'name' => 'required',
                'email' => 'required|email|unique:admins',
                'image' => 'nullable|image',
                'password' => 'required|min:6',
            ];
        }
    }
}
