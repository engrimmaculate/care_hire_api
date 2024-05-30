<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return  true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'car_model'=>['required', 'string'],
            'seats'=>['required','string'],
            'doors'=>['required','string'],
            'transmission'=>['required','string'],
            'air_conditioning'=>['required','string'],
            'booking_category'=>['required','string'],
            'fuel_policy'=>['required','string'],
            'insurance'=>['required','string'],
            'cancellation'=>['required','string'],
            'amendment'=>['required','string'],
            'theft_protection'=>['required','string'],
            'day_rate'=>['required','string'],
            'city'=>['required','string'],
            'quantity_available'=>['required','string'],
        ];
    }
}
