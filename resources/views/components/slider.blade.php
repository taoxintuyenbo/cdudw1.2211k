<div class="section_slider">
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            @foreach ($list_banner as $row)
                @if ($loop->first)
                    <div class="carousel-item active">
                        <img src="{{ asset('images/banners/' . $row->image) }}" class="d-block w-100 h-100" alt="{{ $row->image }}">
                    </div>
                @else
                    <div class="carousel-item">
                        <img src="{{ asset('images/banners/' . $row->image) }}" class="d-block w-100 h-100" alt="{{ $row->image }}">
                    </div>
                @endif
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<style>

    .slider-container{
        width: 1500px !important;
        height: 450px !important;
        margin-bottom:20px !important;
    }
    .carousel-item img {
        width: 100% !important;
        height:100% !important;
        object-fit: cover;  
    }
</style>
