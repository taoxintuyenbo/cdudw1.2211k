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
    </div>
  </section>
@endsection
