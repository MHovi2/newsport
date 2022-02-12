<?php

namespace App\Http\Controllers;

use App\Models\publish_news;
use App\Models\add_category;
use App\Models\manage_category;

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
        $data = add_category::all();
        return view('backend.publish-news',['category'=>$data]);
    }

    //POST News
    public function addNews(Request $req){
        
        
        
        if($req->hasFile('newsImage')){

            $news = new publish_news();
            //Upload to database 
            $news->title = $req->title;
            $news->subtitle = $req->subtitle;
            $news->category = $req->category;
            $news->content = $req->content;
            //Image Upload
            $image = $req->file('newsImage');
            $name= time();
            $folder = 'uploads/news/';
            $filePath = $folder.$name.'.'.$image->getClientOriginalExtension();
            $touch = Image::make($image);
            $touch->save(public_path($filePath));
            $news->image = $filePath;
            $news->image_caption = $req->imageCaption;
            $news->image_alt = $req->imageAlt;
            $news->news_source = $req->newsSource;
            $news->short_description = $req->shortDescription;
            $news->tags = $req->tags;
            $news->lead = $req->mainLead;
            $news->status = $req->status;
            $news->save();

        }
        return redirect()->back();
    }

    //GET Manage News..
    public function manageNews(){
        $data = publish_news::where('status','=',1)->get();
        return view('backend.manage_news',['news'=>$data]);
    }


    //Add Category Get Method..
    public function addCategory(){
        return view('backend.add_category');
    }
    //Add Category POST meathod ..
    public function postCategory(Request $req){
        $category = new add_category();
        $category->category_name = $req->categoryName;
        $category->menu_order = $req->menuOrder;
        $category->save();

        return redirect()->back();
    }
    //Get Manage Category
    public function manageCategory(Request $req){
        $data = add_category::all();
        return view('backend.manage_category',['category'=> $data]);
    }

    //News Trash GET meathod...
    public function newsTrash(){
        $data = publish_news::where('status','=',0)->get();
        return view('backend.news_trash',['news'=>$data]);
    }



    //Custom Log Out
    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    


}
