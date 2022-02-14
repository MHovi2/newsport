<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //Dashboard controller
    public function index(){
        return view('frontend.index');
    }
}
