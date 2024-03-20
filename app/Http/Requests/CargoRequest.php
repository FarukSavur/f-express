<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CargoRequest extends FormRequest
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
            'user_name' => ['required', 'min:3', 'max:50'],
            'user_surname' => ['required', 'min:2', 'max:50'],
            'product_name' => ['required', 'min:2', 'max:191'],
            'product_content' => ['required', 'min:2', 'max:191'],
            'product_kilogram' => ['required', 'numeric', 'min:1', 'max:1000'],
            'product_description' => ['required', 'min:2', 'max:1000'],
        ];
    }
    
}
