<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\ApplicationModel;
use App\Models\ApplicationOptionModel;
use App\Models\CountryModel;
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
        // Передаем данные в представление
        return view('view.application', compact('countries'));
    }
}
