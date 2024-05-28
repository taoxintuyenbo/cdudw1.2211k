<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
class ProductController extends Controller
{
    
    public function index()
    {
        $list = Product::where('product.status','!=',0)
        ->join('category','category.id','=','product.category_id')
        ->join('brand','brand.id','=','product.brand_id')
        ->select('product.id','product.name','product.image','category.name as categoryname','brand.name as brandname')
        ->orderBy('product.created_at','desc')
        ->get();
        return view("backend.product",compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.addProduct");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
}
