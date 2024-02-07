<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainsController extends Controller
{

    public function index()
    {
        $trains = Train::all();
        return view('trains.index', compact('trains'));

    }

    public function create()
    {
        return view('trains.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'city' => 'required',
        ]);
        $train = new Train();
        $train->city = $request->city;
        $train->distance = $request->distance;
        $train->avgspeed = $request->avgspeed;
        $train->save();

        return redirect()->route('trains.create')->with('success', 'Sikeresen létrehozva');

        $distance = $request->input('distance');
        $avgspeed = $request->input('avgspeed');

    }

    public function show(string $id)
    {
        $train = Train::find($id);
        return view('trains.show', compact('train'));
    }
    public function edit(string $id)
    {
        $train = Train::find($id);
        return view('trains.edit', compact('train'));
    }
    public function update(Request $request, string $id)
    {
        $request->validate([
            'city' => 'required',
        ]);
        $train = Train::find($id);
        $train->city = $request->city;
        $train->distance = $request->distance;
        $train->avgspeed = $request->avgspeed;
        $train->save();

        return redirect()->route('trains.index')->with('success', 'Adatok modositása sikeres volt!');

    }

    public function destroy(string $id)
    {
        $train = Train::find($id);
        $train->delete();

        return redirect()->route('trains.index')->with('success', 'Adatok sikeresen törlődtek!');    
    }
}

