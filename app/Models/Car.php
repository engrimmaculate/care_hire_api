<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    
    protected $fillable =[
        'name',
        'car_model',
        'seats',
        'doors',
        'transmission',
        'air_conditioning',
        'booking_category',
        'fuel_policy',
        'insurance',
        'cancellation',
        'amendment',
        'theft_protection',
        'day_rate',
        'city',
        'quantity_available'
    ];
}
