<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;

class AirportController extends Controller
{
    public function index() {

        $airports = Airport::all()->toArray();
        return array_reverse($airports);

    }

    public function store(Request $request) {

        $airport = new Airport(['name' => $request->input('name'), 'code' => $request->input('code'), 'city' => $request->input('city') ]);
        $airport->save();

        return response()->json('Airport creado!');

    }

    public function show($id) {

        $airport = Airport::find($id);
        return response()->json($airport);

    }

    public function update($id, Request $request) {

        $airport = Airport::find($id);
        $airport->update($request->all());

        return response()->json('Airport actualizado!');

    }

    public function destroy($id) {

        $airport = Airport::find($id);
        $airport->delete();

        return response()->json('Airport borrado!');

    }
}
