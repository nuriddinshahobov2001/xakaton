<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\SitiesModel;
use App\Models\Admin\StatesModel;
use Illuminate\Http\Request;

class SitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $states = StatesModel::all();
        $cities = SitiesModel::all();
        return view('admin.cities.index', compact('states', 'cities'));
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
        SitiesModel::create([
            'states_id' => $request['states_id'],
            'name' => $request['name'],
        ]);
        return redirect()->back()->with('success', 'City created successfully');
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
