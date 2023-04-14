<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFlightsRequest;
use App\Http\Requests\UpdateFlightsRequest;
use App\Models\Flights;
use App\Http\Resources\FlightResource;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return FlightResource::collection(Flights::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFlightsRequest $request
     * @return FlightResource
     */
    public function store(StoreFlightsRequest $request)
    {
        $flight = Flights::create($request->validated());

        return new FlightResource($flight);
    }

    /**
     * Display the specified resource.
     *
     * @param Flights $flights
     * @return FlightResource
     */
    public function show(Flights $flights)
    {
        return new FlightResource($flights);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFlightsRequest  $request
     * @param Flights $flights
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFlightsRequest $request, Flights $flights)
    {
        $flights->update($request->validated());

        return new FlightResource($flights);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Flights $flights
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flights $flights)
    {
        $flights->delete();

        return response()->noContent();
    }
}
