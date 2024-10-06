<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function store(Request $request){
        \App\Models\AppModel::create([
            'name' => $request->name,
            'date' => $request->date,
            'region' => $request->region,
            'city' => $request->city,
            'status' => $request->status,
            'education' => $request->education,
            'parents' => $request->parents,
            'special_education' => $request->special_education,
            'university' =>$request->university,
            'reason' => $request->reason,
            'profession' => $request->profession,
        ]);
        return redirect()->route('home');
    }
}
