<?php

namespace App\Http\Controllers;

use App\Models\publish_news;
use App\Models\add_category;
use App\Models\manage_category;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //Dashboard controller
    public function index(){
        $news = publish_news::where([
            ['status','=',1],
            ['lead','=',1],
        ])
        ->orderBy('id','DESC')
        ->get();
        return view('frontend.index',['news'=>$news]);
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
