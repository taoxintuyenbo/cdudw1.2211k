@extends('layouts.admin')
@section('title','Orderdetail')
@section('content')
<div class="content-wrapper">
    <!-- CONTENT -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Orderdetail Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Orderdetail Page</li>
            </ol>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-12 text-right">
            <a href="#" class="btn btn-sm btn-success ">
                        <i class="fa fa-plus px-2" aria-hidden="true"></i>Add
                    </a>
                    <a href="#" class="btn btn-sm btn-danger ">
                        <i class="fa fa-trash px-2" aria-hidden="true"></i>Trash bin
                    </a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered table-hover table-striped"> 
            <thead>
            <tr>
                <th class="text-center">#</th>
                <th class="text-center">Order ID</th>
                <th class="text-center">Product name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Discount</th>
                <th class="text-center">Total</th>
                 <th class="text-center">Action</th>
                <th class="text-center">ID</th>

            </tr>
            </thead>
            <tbody>
              @foreach ($list as $row)
                <tr>
                    <td><input type="checkbox" name="orderdetail_checkbox" value="1"></td>
                    <td>orderid</td>
                    <td>producrnmae</td>
                    <td>price</td>
                    <td>quantity</td>
                    <td>discount</td>
                    <td>total</td>
                    <td>
    @php
        $args = ['id' => $row->id];
    @endphp
    <a href="{{ route('admin.orderdetail.status', $args) }}" class="btn btn-sm btn-success">
        <i class="fa fa-toggle-on" aria-hidden="true"></i>
    </a>
    <a href="{{ route('admin.orderdetail.show', $args) }}" class="btn btn-sm btn-info">
        <i class="fa fa-eye" aria-hidden="true"></i>
    </a>
    <a href="{{ route('admin.orderdetail.edit', $args) }}" class="btn btn-sm btn-primary">
        <i class="fa fa-edit" aria-hidden="true"></i>
    </a>
    <a href="{{ route('admin.orderdetail.delete', $args) }}" class="btn btn-sm btn-danger">
        <i class="fa fa-trash" aria-hidden="true"></i>
    </a>
</td>
                <td>id</td>
                </tr>
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </section>
    <!-- /.CONTENT -->
  </div>@endsection