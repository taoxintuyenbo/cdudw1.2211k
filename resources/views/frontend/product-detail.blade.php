@extends('layouts.site')
@section('title', 'Chi tiết sản phẩm')
@section('content')
<div class="container my-3">
    <div class="row">
        <div class="col-md-6">
            <img class="img-fluid w-100" src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->image }}">
        </div>
        <div class="col-md-6">
            <h1>{{ $product->name }}</h1>
            <p>Mô tả</p>
            <h3 class="fs-6">{{ $product->description }}</h3>
            <div class="row">
            @if ($product->pricesale > 0 && $product->pricesale < $product->price)
                <div class="col-8">
                    <span class="text-success">{{ number_format($product->pricesale) }}₫</span>
                    <del class="text-muted">{{ number_format($product->price) }}₫</del>
                </div>
                <div class="col-4  text-danger">
                    -{{ number_format((($product->price - $product->pricesale) / $product->price) * 100) }}%
                </div>
            @else
                <div class="col-12">
                    <span class="text-success">{{ number_format($product->price) }}₫</span>
                </div>
            @endif
            </div>
            <div class="input-group my-3">
                <input type="number" value="1" min="0"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Place order</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3>Detail</h3>
            {!!$product->detail!!}
        </div>
    </div>
    <div class="row mt-3 mb-3">
        <div class="col-12">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Related product</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Comment</button>
                
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="section_product_new my-5">
                    <div class="row">
                        @foreach ($product_list as $product)
                            <div class="col-md-3 mb-4">
                                <x-product-card :product="$product" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">Embeded FB</div>
            
        </div>

        </div>
    </div>
</div>
@endsection
