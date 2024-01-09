<?php

namespace App\Http\Controllers;

use App\Http\Requests\LiveStoreRequest;
use App\Models\Live;
use Illuminate\Http\Request;

class LiveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lives = Live::all();
        return view('live.index', compact('lives'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('live.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LiveStoreRequest $request)
    {

        $file = $request->file('img');
        // Mass Assignment
        Live::create([

            "artist" => $request->artist,
            "genre" => $request->genre,
            "location" => $request->location,
            "date" => $request->date,
            "tour" => $request->tour,
            "img" => $file ? $file->store('public/images') : 'public/images/default.png'

        ]);

        return redirect()->route('live.index')->with('success', 'Concerto aggiunto con successo');
    }

    /**
     * Display the specified resource.
     */
    public function show(Live $live)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Live $live)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Live $live)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Live $live)
    {
        //
    }
}
