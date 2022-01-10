<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airline;

class AirlineController extends Controller
{
    public function index() {

        $airlines = Airline::all()->toArray();

        return array_reverse($airlines);

    }

    public function store(Request $request) {

        $airline = new Airline(['name' => $request->input('name'), 'code' => $request->input('code') ]);
        $airline->save();

        return response()->json('Airline creado!');

    }

    public function show($id) {

        $airline = Airline::find($id);

        return response()->json($airline);

    }

    public function update($id, Request $request) {

        $airline = Airline::find($id);
        $airline->update($request->all());

        return response()->json('Airline actualizado!');

    }

    public function destroy($id) {

        $airline = Airline::find($id);
        $airline->delete();

        return response()->json('Airline borrrado!');

    }

}
