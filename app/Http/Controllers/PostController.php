<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class PostController extends Controller
{
    // public function __construct(){
    //      $this->middleware('auth')->except(['index','show']);
    // }
    //
    public function index() {
        $posts = post::orderBy('id','desc')->paginate(6);
        $count = post::count();
        return view('post.index',['posts'=>$posts , 'count'=>$count]);
    }

    public function show($id) {

        $post = post::find($id);
        return view('post.show',compact('post'));
    }
    public function create() {

        return view('post.create');
    }

    
    public function store(Request $request) {
        

           $request->validate([
           'title'=>'required',
           'body'=>'required',
           'coverImage'=>'image|mimes:png,jpg,jpeg|max:1999'
           ]);
           if($request->hasfile('coverImage'))
           {
               $file =$request->file('coverImage');
               $ext = $file->getClientOriginalExtension();
               $filename = 'cover_image_'.time().'.'.$ext;
               $file->storeAs('public/coverImages',$filename);
           }
           else{
               $filename = 'noImage.png';
           }
           $post = new  Post();
           $post->title = $request->title;
           $post->body = $request->body;
           $post->user_id = auth()->user()->id;
           $post->image = $filename;
           $post->save();
           return redirect('post')->with('status' , 'post was create successfuly :)');

        }

        public function edit($id) {

            
            $post = post::find($id);
            if(auth()->user()->id !== $post->user_id ){
                return redirect('/post')->with('error','you are not login in');
            }
            return view('post.edit',compact('post'));
        }

        public function update(Request $request ,$id) {
           
            $request->validate([
            
            'title'=>'required',
            'body'=>'required'
            ]);
 
            $post = post::find($id);
            $post->title = $request->title;
            $post->body = $request->body;
            $post->save();
            return redirect('post')->with('status' , 'post was updated successfuly :)');
 
         }
         public function destroy($id) {

            $post = post::find($id);
            $post->delete();
            return redirect('post')->with('status' , 'post was deleted successfuly :)');

        }

}
