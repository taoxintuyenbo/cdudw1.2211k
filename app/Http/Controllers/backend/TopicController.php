<?php

namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\Topic;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTopicRequest;
class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Topic::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlsortorder="";
        foreach($list as $item)
        {
            $htmlsortorder .="<option value='" . $item->sort_order . "'>" . $item->sort_order . "</option>";
        }
        return view("backend.topic.topic",compact("list","htmlsortorder"));
    }

  

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTopicRequest $request)
    {
        $topic = new Topic();
        $topic->name = $request->name;
        $topic->slug = Str::of($request->name)->slug('-');
        $topic->sort_order =$request->sort_order;
        $topic->description =$request->description;
        $topic->created_at =date('Y-m-d H:i:s');
        $topic->created_by =Auth::id()??1;
        $topic->status = $request->status;
        $topic->save();
        return redirect()->route('admin.topic.index');
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
