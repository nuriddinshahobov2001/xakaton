<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\CountryModel;
use App\Models\Admin\StatesModel;
use Illuminate\Http\Request;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class StatesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = StatesModel::all();
        $country =  CountryModel::all();
        return view('admin.states.index', compact('states', 'country'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        StatesModel::create([
            'country_id' => $request->country_id,
            'name' => $request->name,
        ]);
        return redirect()->route('states.index')->with('success', 'State created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
