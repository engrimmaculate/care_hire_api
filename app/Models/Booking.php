<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use HasFactory,Notifiable;
    protected $fillable = [
        'car_id',
        'firstname',
        'surname',
        'age',
        'email',
        'title',
        'pickup_location',
        'pickup_date',
        'destination',
        'return_date',
        'dropoff_location',
        'day_rate',
        'total',
        'payment_method',
        'payment_status',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'pickup_date' => 'date',
        'return_date' => 'date',
    ];
}
