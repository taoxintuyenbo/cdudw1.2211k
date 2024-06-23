@props(['product'])
<div class="card">
 <a href="{{route('site.product.detail',['slug'=>$product->slug])}}">
 <img src="{{ asset('images/products/' . $product->image) }}" style="width:250px;height:200px;" class="card-img-top" alt="{{$product->image}}"></a>
    <div class="card-body">
    <h4 class="card-title"><a href="{{route('site.product.detail',['slug'=>$product->slug])}}">{{ $product->name }}</a></h4>

        <h5 class="card-title">{{ $product->title }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <div class="row mb-3">
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
        <a href="{{ $product->link }}" class="btn btn-primary">Learn More</a>
    </div>
    
</div>
<style>
    a{
        text-decoration: none !important;
    }
</style>