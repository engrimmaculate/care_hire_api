<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
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
            'car_id'=>['required','string'],
            'firstname'=>['required','string'],
            'surname'=>['required','string'],
            'age'=>['required','string'],
            'email'=>['required','email'],
            'title'=>['required','string'],
            'pickup_location'=>['required','string'],
            'pickup_date'=>['required','datetime'],
            'destination'=>['required','string'],
            'return_date'=>['required','datetime'],
            'dropoff_location'=>['required','string'],
            'day_rate'=>['required','string'],
            'total'=>['required','string'],
            'payment_method'=>['required','string'],
            'payment_status'=>['required','string'],
        ];
    }
}
