<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarDriverRequest extends FormRequest
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
            'firstname'=>['required','string'],
            'surname'=>['required','string'],
            'age'=>['required','string'],
            'email'=>['required','email'],
            'title'=>['required','string'],
            'phone'=>['required','string'],
            'guarantor'=>['required','string'],
            'licence_no'=>['required','string'],
        ];
    }
}
