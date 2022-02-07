<?php

namespace App\Http\Controllers;

use App\Models\publish_news;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;

class BackendController extends Controller
{
    //Index Controller
    public function index(){
        return view('backend.index');
    }
    //GET Publish News Controller
    public function publishNews(){
        return view('backend.publish-news');
    }

    //POST News
    public function addNews(Request $req){
        
        $news = new publish_news();

        $title = $req->file('title');
        $subtitle = $req->file('subtitle');

        $news->title = $req->title;
        $news->subtitle = $req->subtitle;
        $news->category = $req->category;
        $news->content = $req->content;
        $news->image = $req->newsImage;
        $news->image_caption = $req->imageCaption;
        $news->image_alt = $req->imageAlt;
        $news->news_source = $req->newsSource;
        $news->short_description = $req->shortDescription;
        $news->tags = $req->tags;
        $news->lead = $req->mainLead;
        $news->status = $req->status;

        $news->save();

        return redirect()->back();
    }

    //GET Manage News..
    public function manageNews(){
        return view('backend.manage_news');
    }

    //Custom Log Out
    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
            return redirect('/login');
        }

}
