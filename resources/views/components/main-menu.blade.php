<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffffff;">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                @foreach ($listmenu as $rowmenu)
                    <x-main-menu-item :rowmenu="$rowmenu" />
                @endforeach
            </ul>
        </div>
        <div class="nav-item search-container">
              <input
                type="text"
                placeholder="Search..."
                class="search-input py-2 px-4 rounded ml-3"
                style="border: 1px solid black"
              />
              <button
                type="submit"
                class="search-button btn btn-link"
                style="color: blue; border: none; background: none"
              >
                <i class="bi bi-search" style="font-size: 24px"></i>
              </button>
        </div>
        <div class="nav-item d-flex align-items-center">
    <button class="btn btn-outline-primary me-2">
        <i class="bi bi-person"></i> Login
    </button>
    <button class="btn btn-outline-primary">
        <i class="bi bi-cart"></i> Cart
    </button>
</div>
    </div>
</nav>

<style>
    .navbar {
        border: none;
        box-shadow: none;
        justify-content:center  !important;
    }
    .navbar-nav .nav-link {
        color: #000000 !important;
        font-family: "Arial", sans-serif !important;
        margin-left: 0 !important;
        padding: 0 !important;
        font-size: 20px;

 
    }
    .navbar-toggler-icon {
        color: #000000 !important;
    }
</style>
