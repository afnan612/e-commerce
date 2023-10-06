<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
                'sub_title' => 'required',
                'review' => 'required',
                'image' => 'nullable|image',
            ];
        }

        else {
            return [
                'name' => 'required',
                'sub_title' => 'required',
                'review' => 'required',
                'image' => 'nullable|image',
            ];
        }
    }
}
