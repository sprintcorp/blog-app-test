<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
//        dd(request()->route()->parameter('post')->id);
        if ($this->isMethod('PUT')) {
            return [
                'title' => 'nullable|string|unique:posts,title,'.request()->route()->parameter('post')->id,
                'link' => 'nullable|string',
                'author_name' => 'nullable|string',
            ];
        }

        return [
            'title' => 'required|string|unique:posts',
            'link' => 'required|string',
            'author_name' => 'required|string',
        ];
    }
}
