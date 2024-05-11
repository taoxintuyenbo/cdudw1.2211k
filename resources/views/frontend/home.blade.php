@extends('layouts.site')
@section('title','Home')
@section('content')
<nav class="category-bar">
    <ul class="category-list">
      <li class="category-item"><a href="#electronics">Electronics</a></li>
      <li class="category-item"><a href="#apparel">Apparel</a></li>
      <li class="category-item"><a href="#home-goods">Home Goods</a></li>
      <li class="category-item"><a href="#books">Books</a></li>
      <li class="category-item"><a href="#sports">Sports</a></li>
    </ul>
  </nav>

  <div class="slider-container">
    <div class="slide active justify-content-center">
      <h2>Slide1</h2>
    </div>
    <div class="slide">
      <h2>Slide2</h2>
    </div>
    <div class="slide">
      <h2>Slide3</h2>
    </div>
    <a class="prev" onclick="moveSlide(-1)">&#10094;</a>
    <a class="next" onclick="moveSlide(1)">&#10095;</a>
  </div>

  <script src="script.js"></script>
  <div class="new-products">
    <h2>New Products</h2>
    <div id="product-container" class="d-flex flex-wrap">
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
  </div>

  <div class="sale-products">
    <h2>Sale Products</h2>
    <div id="product-container" class="d-flex flex-wrap">
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
  </div>

  <div class="new-posts">
    <h2>New posts</h2>
    <div id="product-container" class="d-flex flex-wrap">
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
  </div>

@endsection
