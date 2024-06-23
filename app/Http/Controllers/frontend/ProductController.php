<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    //product all
    public function index()
    {
        $product_list = Product::where('product.status','!=',0)
        ->orderBy('product.created_at','desc')
        ->paginate(6);
        return view("frontend.product",compact("product_list"));
    }

    public function getlistcategoryid($rowid)
    {
        $listcatid = [];
        array_push($listcatid, $rowid);
        $list1 = Category::where([['parent_id', '=', $rowid], ['status', '=', 1]])->select('id')->get();
        if (count($list1) > 0) {
            foreach ($list1 as $row1) {
                array_push($listcatid, $row1->id);
                $list2 = Category::where([['parent_id', '=', $row1->id], ['status', '=', 1]])->select('id')->get();
                if (count($list2) > 0) {
                    foreach ($list2 as $row2) {
                        array_push($listcatid, $row2->id);
                    }
                }
            }
        }       
        return $listcatid;
    }
    //product category
    public function category($slug)
    {
        $row = Category::where([['slug', $slug], ['status', '=', 1]])->select('id','name','slug')
        ->first();
        $listcatid = [];
        if ($row != null) {
            $listcatid = $this -> getlistcategoryid($row->id);
        }
 
        $product_list = Product::where('product.status','!=',0)
        ->whereIn('category_id',$listcatid)
        ->orderBy('product.created_at','desc')
        ->paginate(6);
        return view("frontend.product-category",compact("product_list",'row'));
    }
    public function product_detail($slug)
    {
        $product = Product::where([['status', '=', 1], ['slug', '=', $slug]])->first();
        $listcatid = [];
        $listcatid = $this -> getlistcategoryid($product->category_id);
        $product_list = Product::where([['product.status','=',1],['id','!=',$product->id]])
        ->whereIn('category_id',$listcatid)
        ->orderBy('product.created_at','desc')
        ->limit(8)
        ->get();
        return view('frontend.product-detail', compact('product','product_list'));
    }
}
