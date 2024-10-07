<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function store(Request $request){
//        dd($request->all());
        \App\Models\AppModel::create([
            'name' => $request->name,
            'date' => $request->date,
            'region' => $request->region,
            'city' => $request->city,
            'status' => $request->status,
            'education' => $request->education,
            'parents' => $request->parents ?? null,
            'special_education' => $request->special_education ?? null,
            'university' =>$request->university ?? null,
            'reason' => $request->reason ?? null,
            'profession' => $request->profession ?? null,
        ]);
        return redirect()->route('home');
    }
}
