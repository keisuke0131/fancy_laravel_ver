<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth; 


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('verified');
    }

    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $like_model = new Like;
        $data = [
            'posts' => $posts,
            'like_model'=>$like_model,
        ];
        
        return view('posts.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $rules = [
            'title' => ['required', 'max:50'],
            'content' => ['required']
        ];

        $this->validate($request, $rules);

        $post = Post::create();
        $post->title = $request->title;
        $post->content = $request->content;
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('/', $image, 'public');
        $post->image_path = Storage::disk('s3')->url($path);
        $post->save();
        return redirect('/posts')->with('flash_message', '投稿が完了しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post])->with([
            'defaultTitle' => $post->title,
            'defaultContent' => $post->content,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->title = $request->title;
        $post->content = $request->content;
        $image = $request->file('image');
        if($image != NULL){
            $path = Storage::disk('s3')->putFile('/', $image,'public');
            $post->image_path = Storage::disk('s3')->url($path);
        }
        $post->save();
        return redirect('/posts')->with('flash_message', '投稿が編集されました');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('posts')->with('flash_message', '投稿が削除されました');
    }

    public function ajaxlike(Request $request)
    {
        $id = Auth::user()->id;
        $post_id = $request->post_id;
        $like = new Like;
        $post = Post::findOrFail($post_id);
        $postLikesCount = $post->loadCount('likes')->likes_count;

        if ($like->like_exist($id, $post_id)) {
            $like = Like::where('post_id', $post_id)->where('user_id', $id)->delete();
        } else {
            $like = new Like;
            $like->post_id = $request->post_id;
            $like->user_id = Auth::user()->id;
            $like->save();
        }

        $json = [
            'postLikesCount' => $postLikesCount,
        ];
        return response()->json($json);
    }

    public function like()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $like_model = new Like;
        $id = Auth::user()->id;
        $data = [
            'posts' => $posts,
            'like_model'=>$like_model,
            'id' =>$id
        ];
        
        return view('posts.like', $data);
    }
}
