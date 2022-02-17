<?php

namespace App\Http\Controllers;

use App\Models\publish_news;
use App\Models\add_category;
use App\Models\manage_category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\ImageManagerStatic as Image;
use Session;

class BackendController extends Controller
{
    //Index Controller
    public function index(){
        $news = publish_news::all()->count();
        $category = add_category::all()->count();
        return view('backend.index',compact('news','category'));
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
        $count_publish = publish_news::where('status','=',1)->count();
        $count_trash = publish_news::where('status','=',0)->count();
        $count_all = publish_news::all()->count();

        $news = publish_news::where('status','=',1)->orderBy('id','DESC')->get();
        return view('backend.manage_news',compact('news','count_publish','count_trash','count_all'));
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

        Session::flash('message','Data insurt successfully');

        return redirect()->back();
    }
    //Get Manage Category
    public function manageCategory(Request $req){
        $count_category = add_category::all()->count();
        $data = add_category::all();
        return view('backend.manage_category',['category'=> $data,'count_category'=>$count_category]);
    }

    //News Trash GET meathod...
    public function newsTrash(){
        $count_publish = publish_news::where('status','=',1)->count();
        $count_trash = publish_news::where('status','=',0)->count();
        $count_all = publish_news::all()->count();
        $news = publish_news::where('status','=',0)->get();
        return view('backend.news_trash',compact('news','count_publish','count_trash','count_all'));
    }

    //Gallery GET method ..
    public function gallery(){
        $data = publish_news::all();
        return view('backend.gallery',['image'=>$data]);
    }



    //Custom Log Out
    public function logout(Request $request){
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    


}
