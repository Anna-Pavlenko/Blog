<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users' . $this->$user_id,
            'user_id'=>'reqiured|integer|exists:user,id',
            'role'=>'required|integer'
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'this field is required',
            'name.string'=>'data must match the string type',
            'email.required'=>'this field is required',
            'email.string' => 'email must match the string type',
            'email.email' => 'your mail must match the format email@some.done',
            'email.unique' => 'user with this email already exists',
            'password.required' => 'this field is required',
            'password.string'=>'password must match the string type'
        ];
    }
}
