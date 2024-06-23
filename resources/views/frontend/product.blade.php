@extends('layouts.site')
@section('title','Product')
@section('content')
<section class="container mt-4">
    <div class="title-section">
        <h1>TẤT CẢ SẢN PHẨM</h1>
    </div>
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    Danh mục
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input type="checkbox"> Thời trang nam
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox"> Thời trang nữ
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox"> Thời trang trẻ em
                    </li>
                </ul>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    Thương hiệu
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input type="checkbox"> Việt Nam
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox"> Hàn Quốc
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox"> Thái Lan
                    </li>
                </ul>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    Lọc giá
                </div>
                <div class="card-body">
                    <input type="range" class="form-range" min="10000" max="1000000">
                    <div class="d-flex justify-content-between">
                        <span>10,000</span>
                        <span>1,000,000</span>
                    </div>
                    <button class="btn btn-primary mt-3">Lọc Giá</button>
                </div>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    Màu
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input type="checkbox"> Việt Nam
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox"> Hàn Quốc
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox"> Thái Lan
                    </li>
                </ul>
            </div>
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    Size
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <input type="checkbox"> Small
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox"> Medium
                    </li>
                    <li class="list-group-item">
                        <input type="checkbox"> Large
                    </li>
                </ul>
            </div>
        </div>
        <!-- Main content -->
        <div class="col-md-9">
            <div class="row">
                @foreach ($product_list as $product)
                    <div class="col-md-4 mb-4">
                        <x-product-card :product="$product" />
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col-12 d-flex justify-content-center">
                    {{$product_list->links()}}
                 </div>
            </div>
        </div>
    </div>
</section>
@endsection

<style>
    .card-header {
        background-color: var(--primary-color) !important;
        color: white;
    }
    .btn-success {
        background-color: var(--primary-color) !important;
        border-color: var(--primary-color) !important;
    }
    .title-section {
        background: linear-gradient(to right, #0d47a1, #64b5f6, #00c853);
        color: white;
        text-align: center;
        padding: 20px 0;
        font-size: 2em;
        font-weight: bold;
        border-radius:20px;
        margin-bottom:20px;
    }

    .title-section h1 {
        margin: 0;
    }
</style>
