<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\Brand;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreBrandRequest;
class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list =Brand::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlsortorder="";
        foreach($list as $item)
        {
             $htmlsortorder .="<option value='" . $item->sort_order . "'>" . $item->sort_order . "</option>";
        }
        return view("backend.brand.brand",compact("list","htmlsortorder"));
    }

    /**
     * Show the form for creating a new resource.
     */
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBrandRequest $request)
    {
        $brand = new Brand();
        $brand->name = $request->name;
        $brand->slug = Str::of($request->name)->slug('-');
        $brand->sort_order =$request->sort_order;
        $brand->description =$request->description;
        $brand->created_at =date('Y-m-d H:i:s');
        $brand->created_by =Auth::id()??1;
        $brand->status = $request->status;
        $brand->save();
        return redirect()->route('admin.brand.index');
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
