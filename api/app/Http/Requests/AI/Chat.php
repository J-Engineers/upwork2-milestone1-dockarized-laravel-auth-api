<?php

namespace App\Http\Requests\AI;

use Illuminate\Foundation\Http\FormRequest;

class Chat extends FormRequest
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
            'genre' => 'required|string',
            
        ];
    }


    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'genre.required' => 'Genre is required!',
            'genre.string' => 'Genre must be a string',
        ];
    }
}