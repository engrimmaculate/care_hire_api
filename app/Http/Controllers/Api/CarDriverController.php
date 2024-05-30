<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CarDriver;
use App\http\Request\CarDriverRequest;
use App\http\Resources\CarDriverResource;
use Illuminate\Http\Request;

class CarDriverController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return CarDriverResource::collection(CarDriver::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $carDriver = CarDriver::create($request->validated());
        return new CarDriverResource($carDriver);
    }

    /**
     * Display the specified resource.
     */
    public function show(CarDriver $carDriver)
    {
        //
        return new CarDriverResource($carDriver);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CarDriver $carDriver)
    {
        //
        $carDriver->update($request->validated());
        return new CarDriverResource($carDriver);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CarDriver $carDriver)
    {
        //
        $carDriver->delete();
        return response()->noContent();
    }
}
