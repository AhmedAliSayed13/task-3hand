<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Article;
class adminController extends Controller
{
private $path='admin.';
    /**
     * show dashboard for admin.
     *
     * @return void
     */
    public function dashboard(){
        // statistics for admin 
        // number of visitors
        $usersCount=User::where('role_id',2)->count();
         // number of Comment
        $commentsCount=Comment::count();
         // number of Category
        $categoriesCount=Category::count();
         // number of Article
        $articlesCount=Article::count();
       
        return view($this->path.'dashboard',compact('usersCount','commentsCount','categoriesCount','articlesCount'));
    }


}
