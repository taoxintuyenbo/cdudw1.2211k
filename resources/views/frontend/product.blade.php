@extends('layouts.site')
@section('title','Product')
@section('content')
<section class="container mt-4">
    <div class="control-panel d-flex justify-content-between">
      <div>
        <button class="btn btn-primary" id="grid-view">Grid View</button>
        <button class="btn btn-secondary" id="list-view">List View</button>
      </div>
      <select class="form-control w-auto" id="sort-products">
        <option value="low-high">Price: Low to High</option>
        <option value="high-low">Price: High to Low</option>
      </select>
    </div>

    <div class="container mt-4">
      <div id="product-container" class="d-flex flex-wrap mb-2">
        <!-- Card 1 -->
        <x-product-card/>
        <!-- Card 2 -->
        <x-product-card/>
        <!-- Card 3 -->
        <x-product-card/>
        <!-- Card 4 -->
        <x-product-card/>
      </div>
      <div id="product-container" class="d-flex flex-wrap mb-2">
        <!-- Card 1 -->
        <x-product-card/>
        <!-- Card 2 -->
        <x-product-card/>
        <!-- Card 3 -->
        <x-product-card/>
        <!-- Card 4 -->
        <x-product-card/>
      </div>
      <div id="product-container" class="d-flex flex-wrap mb-2">
        <!-- Card 1 -->
        <x-product-card/>
        <!-- Card 2 -->
        <x-product-card/>
        <!-- Card 3 -->
        <x-product-card/>
        <!-- Card 4 -->
        <x-product-card/>
      </div>
      <div id="product-container" class="d-flex flex-wrap mb-2">
        <!-- Card 1 -->
        <x-product-card/>
        <!-- Card 2 -->
        <x-product-card/>
        <!-- Card 3 -->
        <x-product-card/>
        <!-- Card 4 -->
        <x-product-card/>
      </div>
    </div>
  </section>
@endsection
