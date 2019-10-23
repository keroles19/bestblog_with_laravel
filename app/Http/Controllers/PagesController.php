<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class PagesController extends Controller
{
    //
    public function index(){
        // passing data to  blade pages 
        // 1- by  return view('welcome' , compact('var'));
        // 2-     return view('welcome',['title'=>$title]);
        // 3-     return view('welcome')->with('title',$title);
        /* 4-   $data = ['title'=>' kkkffl ' , 'name'=>',fmk'];
               return view('welcome')->with($data);
        */
       
        $posts = post::orderBy('id','desc')->paginate(6);
        $count = post::count();
        return view('post.index',['posts'=>$posts , 'count'=>$count]);
    }
  
    public function about(){
        $data = [
            'name' => 'about page ',
            'url'  =>'prog4u.com'
        ]; 
        return view('pages.about',$data);
    }
  

}
