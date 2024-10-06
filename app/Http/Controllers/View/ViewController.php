<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
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

        return view('view.application');
    }
}
