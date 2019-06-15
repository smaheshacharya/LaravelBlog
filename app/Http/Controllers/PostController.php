<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;//for photo delete 
use App\Post;
use DB;

class PostController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]); // yaslai include garepaxi guest harule aru access paudainana tara index ra show view chain sabaile herna pauxan
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = DB::select('SELECT * FROM posts');//database general query 
        // $posts = Post::all();//all select 
        // $posts = Post::where('title','Post One')->get();//where clause
        // $posts = Post::orderBy('title','desc')->take(1)->get();//limit set
        // pagination
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('posts.index')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999'
        ]);
        //Handle file upload 
        if($request->hasFile('cover_image'))
        {
            //file name with ext
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //only file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            //only ext
            $ext =  $request->file('cover_image')->getClientOriginalExtension();

            // file name to store
            $filenameToStore = $filename.'_'.time().'.'.$ext;

            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$filenameToStore);
        }
        else{
            $filenameToStore = 'noimage.jpg';
        }
        //create post 
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;//yo paxi thapne auth halepaxu
        $post->cover_image = $filenameToStore;
        $post->save();
        return redirect(url('/posts'))->with('success','Post Create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $body = Post::find($id);
        return view('posts.show')->with('body',$body);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $body = Post::find($id);
         if(auth()->user()->id !== $body->user_id){
            return redirect(url('/posts'))->with('error','Unauthorize Page');
         }
        return view('posts.edit')->with('body',$body);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999'

        ]);
            //Handle file upload 
        if($request->hasFile('cover_image'))
        {
            //file name with ext
            $fileNameWithExt = $request->file('cover_image')->getClientOriginalName();
            //only file name
            $filename = pathinfo($fileNameWithExt,PATHINFO_FILENAME);

            //only ext
            $ext =  $request->file('cover_image')->getClientOriginalExtension();

            // file name to store
            $filenameToStore = $filename.'_'.time().'.'.$ext;

            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$filenameToStore);
        }
      
        //create post 
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image'))
        {
           $post->cover_image = $filenameToStore; 
        }
        $post->save();
        return redirect(url('/posts'))->with('success','Update Post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $body = Post::find($id);
          if(auth()->user()->id !== $body->user_id){
            return redirect(url('/posts'))->with('error','Unauthorize Page');
         }
         if($body->cover_image != 'noimage.jpg')
         {
            Storage::delete('public/cover_images/'.$body->cover_image);
         }
        $body->delete();
        return redirect(url('/posts'))->with('success','Delete Post');


    }
}
