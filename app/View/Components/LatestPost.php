<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Post;
class LatestPost extends Component
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
        $listpost = Post::where('status', '=', '1')
        ->orderBy('created_at', 'desc')
        ->limit(4)
        ->get();

        return view('components.latest-post',compact('listpost'));
    }
}
