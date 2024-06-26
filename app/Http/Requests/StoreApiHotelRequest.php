<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreApiHotelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required',
            'location' => 'string|required',
            'description' => 'string|required',
            'region' => 'string|required',
            'stars' => 'integer|required',
            'image' => 'required',
            'image.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
}
