<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;
use Auth;
use Redirect;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show list of blogs.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blogs(Request $request)
    {
        // varible list of articles
        $articles;
        // check if user filter by category id or not
        if($request->category_id){
            // filter by active and category id
            $articles=Article::where(['active'=>1,'category_id'=>$request->category_id])->orderBy('created_at', 'DESC')->get();
        }else{
             // filter by active 
            $articles=Article::where('active',1)->orderBy('created_at', 'DESC')->get();
        }
        // get list of last articles
        $lastArticles=Article::where('active',1)->orderBy('created_at', 'DESC')->take(5)->get();
        // get list of last categories
        $categories=Category::all();
        return view('blogs',compact('articles','lastArticles','categories'));
    }
    /**
     * Show blog by id.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function blogDetails($id)
    {
        // get article by id 
        $article=Article::find($id);
        // get list of last articles
        $lastArticles=Article::where('active',1)->orderBy('created_at', 'DESC')->take(5)->get();
        // get list of last categories
        $categories=Category::all();
        return view('blog',compact('article','lastArticles','categories'));
    }


    public function checkUser()
    {
        // check if user have role admin Redirect to admin dashboard
       if(Auth::check() && Auth::user()->role_id==1){
            return  Redirect::route('admin.dashboard');
       }else if(Auth::check() && Auth::user()->role_id==2){
           // check if user  not admin Redirect to user dashboard
        return  Redirect::route('user.dashboard');
       }else{
        return  Redirect::route('login');
       }
    }
}
