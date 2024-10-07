<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Admin\CountryModel;
use App\Models\Admin\SitiesModel;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index(){
        return view('view.index');
    }
    public function about(){
        return view('view.about');
    }
    public function application(){
        $countries = CountryModel::all();
        $cities = SitiesModel::all();
        return view('view.application', compact('countries', 'cities'));
    }
}
