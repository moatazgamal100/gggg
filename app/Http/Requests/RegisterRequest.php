<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'fname' => 'required',
                'lname' => 'required',
                'email' => 'required|email|unique:users',
                'password' => 'required',
                'dob' => 'required',
                'phone' => 'required',
                'gender' => 'required',

                 [
                'email.required' => 'Email cannot be empty.',
                'email.email' => 'Please provide a valid email address.',
                'email.unique' => 'This email address is already in use.',
            ]
        ];
    }
}
