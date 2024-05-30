<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Post::where('post.status','!=',0)
        ->join('topic','topic.id','=','post.topic_id')
        ->orderBy('post.created_at','desc')
        ->select('post.id','post.image','topic.id as topcid','topic.name as topicname','post.title','post.description','post.status','post.detail' )
        ->get();
        return view("backend.post.post",compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list = Post::where('post.status','!=',0)
        ->join('topic','topic.id','=','post.topic_id')
        ->orderBy('post.created_at','desc')
        ->select('post.id','post.image','topic.id as topicid','topic.name as topicname','post.title','post.description','post.status','post.detail' )
        ->get();
        $htmltopicid="";
        foreach($list as $item)
        {
            $htmltopicid .= "<option value='" . $item->topicid . "'>" . $item->topicname . "</option>";
        }
        return view("backend.post.create",compact("list","htmltopicid"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->slug = Str::of($request->title)->slug('-');
        $post->topic_id =$request->topic_id;
        $post->detail =$request->detail;
        $post->description =$request->description;
        $post->type =$request->type;
        // $post->image =$request->image; 
        $post->created_at =date('Y-m-d H:i:s');
        $post->created_by =Auth::id()??1;
        $post->status = $request->status;
        $post->save();
        return redirect()->route('admin.post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function status(string $id)
    {
        //
    }
}
