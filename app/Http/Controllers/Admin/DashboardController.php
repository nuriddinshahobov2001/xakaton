<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApplicationModel;

class DashboardController extends Controller
{
    public function index(){
        $apps = ApplicationModel::all();
        return view('admin.dashboard', compact('apps'));
    }
}
