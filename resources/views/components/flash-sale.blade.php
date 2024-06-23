<div class="sale-products">
    <h2>Sale Products</h2>
    <div id="product-container" class="d-flex flex-wrap">
        <div class="section_product_new my-5">
            <div class="container">
                <div class="row">
                    @foreach ($listproduct as $product)
                        <div class="col-md-3 mb-3">
                            <x-product-card :product="$product" />
                        </div>
                    @endforeach
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <button class="btn btn-success px-5">More products</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>