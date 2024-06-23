@if ($listmenu->isEmpty())
    <li class="nav-item">
        <a class="nav-link" href="{{ $menu_item->link }}" style="color: white; font-weight: bold; transition: color 0.3s ease;">
            {{ $menu_item->name }}
        </a>
    </li>
@else
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown{{ $menu_item->id }}" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color: white; font-weight: bold; transition: color 0.3s ease;">
            {{ $menu_item->name }}
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown{{ $menu_item->id }}" style="background-color: #0077b6; border: none;">
            @foreach ($listmenu as $item)
                <li><a class="dropdown-item" href="{{ $item->link }}" style="color: white; transition: background-color 0.3s ease;">{{ $item->name }}</a></li>
            @endforeach
        </ul>
    </li>
@endif
<style>
 
    .dropdown-menu,.dropdown-item{
        color: #000000 !important;
        font-family: "Arial", sans-serif !important;
        font-weight: bold;    }
  
</style>