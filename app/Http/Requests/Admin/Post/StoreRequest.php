<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title'=>'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|file',
            'main_image' => 'required|file',
            'category_id'=>'required|integer|exists:categories,id',
            'tag_ids'=>'nullable|array',
            'tag_ids.*'=>'nullable|integer|exists:tags,id',

        ];
    }
     public function messages()
     {
        return [
            'title.required'=>'this field is required',
            'content.required' => 'data must match the string type',
            'preview_image.required' => 'this field is required',
            'preview_image.file' => 'you need to select a file',
            'main_image.required' => 'this field is required',
            'main_image.file' => 'you need to select a file',
            'main_image' => 'required|file',
            'category_id.required'=>'this field is required',
            'category_id.integer'=>'category id must be a number',
            'category_id.exists'=>'category id must be in the database',
            'tag_ids.array'=>'need to send an array of data',
      

        ];
     }
}   
