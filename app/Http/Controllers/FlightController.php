<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;
use App\Models\Airport;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index() {

        $flights = Flight::all()->toArray();

        return array_reverse($flights);
    }

    public function store(Request $request) {

        $flight = new Flight([
            'code' => $request->input('code'),
            'type' => $request->input('type'),
            'departure_id' => $request->input('departure_id'),
            'destination_id' => $request->input('destination_id'),
            'departure_time' => $request->input('departure_time'),
            'arrival_time' => $request->input('arrival_time'),
            'airline_id' => $request->input('airline_id'),
        ]);
        $flight->save();

        return response()->json('Flight creado!');
    }

    public function show($id) {

        $flight = Flight::find($id);

        return response()->json($flight);
    }

    public function update($id, Request $request) {

        $flight = Flight::find($id);
        $flight->update($request->all());

        return response()->json('Flight actualizado!');
    }

    public function destroy($id) {

        $flight = Flight::find($id);
        $flight->delete();

        return response()->json('Flight borrado!');
    }
}
