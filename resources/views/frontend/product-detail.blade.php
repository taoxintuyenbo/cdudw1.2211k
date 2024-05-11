@extends('layouts.site')
@section('title','Product-Detail')
@section('content')
<section class="container mt-4">
    <div class="row">
      <div class="col-md-6">
        <img
          src="https://via.placeholder.com/300x200"
          alt="Product Image"
          class="img-fluid"
        />
      </div>
      <div class="col-md-6">
        <h1>Product Title</h1>
        <p class="price">$29.99</p>
        <p>
          Description of the product here. It's a detailed description that
          talks about the features of the product and why it's worth buying.
        </p>
        <button class="btn btn-primary">Add to Cart</button>
      </div>
    </div>
  </section>

  <section class="container mt-4">
    <h2>Details</h2>
    <p>
      More detailed information about the product, such as specifications,
      materials used, sizes available, etc.
    </p>
  </section>

  <section class="container mt-4">
    <h2>Products same category</h2>
    <div id="product-container" class="d-flex flex-wrap mb-2">
      <!-- Card 1 -->
      <div class="card">
        <img
          src="https://via.placeholder.com/150"
          class="card-img-top"
          alt="Product Image"
        />
        <div class="card-body">
          <h5 class="card-title">Product Title</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="card">
        <img
          src="https://via.placeholder.com/150"
          class="card-img-top"
          alt="Product Image"
        />
        <div class="card-body">
          <h5 class="card-title">Product Title</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="card">
        <img
          src="https://via.placeholder.com/150"
          class="card-img-top"
          alt="Product Image"
        />
        <div class="card-body">
          <h5 class="card-title">Product Title</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
      <!-- Card 4 -->
      <div class="card">
        <img
          src="https://via.placeholder.com/150"
          class="card-img-top"
          alt="Product Image"
        />
        <div class="card-body">
          <h5 class="card-title">Product Title</h5>
          <p class="card-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
          <a href="#" class="btn btn-primary">Learn More</a>
        </div>
      </div>
    </div>
  </section>
@endsection
