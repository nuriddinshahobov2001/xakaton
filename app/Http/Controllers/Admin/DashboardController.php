<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AppModel;

class DashboardController extends Controller
{
    public function index(){
        $apps = AppModel::all();
        return view('admin.dashboard', compact('apps'));
    }
}
