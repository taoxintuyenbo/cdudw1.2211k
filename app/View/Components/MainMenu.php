<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
class MainMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
   
        $listmenu= Menu::where([
            ['status', '=', 1],
            ['position', '=', 'mainmenu'],
            ['parent_id', '=', 0] // Assuming top-level menus have parent_id = 0
        ])->orderBy('sort_order', 'asc')->limit(5)
        ->get();
        return view(('components.main-menu'),compact('listmenu'));
     }
}
