<?php

namespace App\Http\Controllers\backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use illuminate\Support\Str;
use App\Models\Menu;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreMenuRequest;
use App\Http\Requests\UpdateMenuRequest;
class MenuController extends Controller
{
    public function index()
    {
        $list= Menu::where('status','!=',0)->orderBy('created_at','desc')->get();
        return view("backend.menu.menu",compact("list"));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list= Menu::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlparentid="";
        $htmlsortorder="";
        foreach($list as $item)
        {
            $htmlparentid .= "<option value='" . $item->parent_id . "'>" . $item->parent_id . "</option>";
            $htmlsortorder .="<option value='" . $item->sort_order . "'>" . $item->sort_order . "</option>";

        }
        return view("backend.menu.create",compact("list","htmlparentid","htmlsortorder"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMenuRequest $request)
    {
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->parent_id =$request->parent_id;
        $menu->sort_order =$request->sort_order;
        $menu->link =$request->link;
        $menu->type =$request->type;
        $menu->position =$request->position;
        $menu->created_at =date('Y-m-d H:i:s');
        $menu->created_by =Auth::id()??1;
        $menu->status = $request->status;
        if ($menu->save()) {
            toastr()->success('Added successfully!');
        }
        return redirect()->route('admin.menu.index');
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            toastr()->error('The item does not exist.');
            return redirect()->route('admin.menu.index');
        }
        $list= Menu::where('status','!=',0)->orderBy('created_at','desc')->get();
        $htmlparentid="";
        $htmlsortorder="";
        foreach($list as $item)
        {
            if($menu->parent_id==$item->parent_id)
            {
                $htmlparentid .= "<option selected value='" . $item->id . "'>" . $item->name . "</option>";    
            }
            else {
                $htmlparentid .= "<option value='" . $item->id . "'>" . $item->name . "</option>";
            }
            if($menu->sort_order==$item->sort_order)
            {
                $htmlsortorder .="<option selected value='" . $item->sort_order . "'>" . $item->name . "</option>"; 
            }
            else{
                $htmlsortorder .="<option value='" . $item->sort_order . "'>" . $item->name . "</option>";
            }

        }
        return view("backend.menu.edit",compact("menu","htmlparentid","htmlsortorder"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMenuRequest $request, string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            toastr()->error('The item does not exist.');
            return redirect()->route('admin.menu.index');
        }
        $menu->name = $request->name;
        $menu->parent_id =$request->parent_id;
        $menu->sort_order =$request->sort_order;
        $menu->link =$request->link;
        $menu->type =$request->type;
        $menu->position =$request->position;
        $menu->updated_at =date('Y-m-d H:i:s');
        $menu->created_by =Auth::id()??1;
        $menu->status = $request->status;
        if ($menu->save()) {
            toastr()->success('Updated successfully!');
        }
        return redirect()->route('admin.menu.index');
    }



    public function trash()
    {
        $list= Menu::where('status','=',0)->orderBy('updated_at','desc')->get();
        return view("backend.menu.trash",compact("list"));
    }
    public function show(string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            toastr()->error('The item does not exist.');
            return redirect()->route('admin.menu.index');
        }
        return view("backend.menu.show", compact("menu"));
    }
    public function destroy(string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }
        $menu->delete();
        return redirect()->route('admin.menu.trash');
    }

    public function delete(string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }
        $menu->status = 0;
        $menu->updated_at = date('Y-m-d H:i:s');
        $menu->updated_by = Auth::id() ?? 1; //id cua quan tri
        $menu->save();
        return redirect()->route('admin.menu.index');
    }
    public function status(string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            toastr()->error('The item does not exist.');
            return redirect()->route('admin.menu.index');
        }
        $menu->status = ($menu->status == 2) ? 1:2;
        $menu->updated_at = date('Y-m-d H:i:s');
        $menu->updated_by = Auth::id() ?? 1; //id cua quan tri
        $menu->save();
        return redirect()->route('admin.menu.index');
    }

    public function restore(string $id)
    {
        $menu = Menu::find($id);
        if ($menu == null) {
            return redirect()->route('admin.menu.index');
        }
        $menu->status = 2;
        $menu->updated_at = date('Y-m-d H:i:s');
        $menu->updated_by = Auth::id() ?? 1; //id cua quan tri
        $menu->save();
        return redirect()->route('admin.menu.trash');
    }
}
