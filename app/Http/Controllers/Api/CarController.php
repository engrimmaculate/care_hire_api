<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Booking;
use App\Models\CarDriver;
use App\Http\Requests\CarRequest;
use App\Http\Resources\CarResource;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return CarResource::collection(Car::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        //
        $car = Car::create($request->validated());
        return new CarResource($car);
    }

    /**
     * Display the specified resource.
     */
    public function show(Car $car)
    {
        //
        return new CarResource($car);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, Car $car)
    {
        //
        $car->update($request->validated());
        return new CarResource($car);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Car $car)
    {
        //
        $car->delete();
        return response()->noContent();
    }
}
