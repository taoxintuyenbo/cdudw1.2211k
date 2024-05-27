@extends('layouts.site')
@section('title','Home')
@section('content')

<x-product-category-home/>
<x-slider/>
<x-product-new/>
<x-flash-sale/>
<x-latest-post/>

@endsection
