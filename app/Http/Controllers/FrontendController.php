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
            'status' => 1, 
            'lead' => 1
            ])
            ->orderBy('id','DESC')
            ->get();

        $polytics = publish_news::where([
            ['category','=',2],
            ['status','=',1],
        ])
            ->orderBy('id','DESC')
            ->get();
        $international = publish_news::where([
                ['category','=',3],
                ['status','=',1],
        ])
                ->orderBy('id','DESC')
                ->get();
        $national = publish_news::where([
                ['category','!=',3],
                ['status','=',1],
        ])
                ->orderBy('id','DESC')
                ->get();
        $entertainment = publish_news::where([
                ['category','=',4],
                ['status','=',1],
        ])
                ->orderBy('id','DESC')
                ->get();
        $sports = publish_news::where([
                ['category','=',5],
                ['status','=',1],
        ])
                ->orderBy('id','DESC')
                ->get();
                
        return view('frontend.index',compact('news','polytics','international','national','entertainment','sports'));
    }

    //News Controller 
    public function news($id){
        $news = publish_news::find($id);
        $more = publish_news::where('category','=',$id)->get();
        return view('frontend.news-page',compact('news','more'));
    }
    

    //Category Controller 
    public function category(){
        return view('frontend.category-page');
    }


}
