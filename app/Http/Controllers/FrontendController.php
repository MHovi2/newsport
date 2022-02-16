<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //Dashboard controller
    public function index(){
        return view('frontend.index');
    }

    //News Controller 
    public function news(){
        return view('frontend.news-page');
    }

    //Category Controller 
    public function category(){
        return view('frontend.category-page');
    }
}
