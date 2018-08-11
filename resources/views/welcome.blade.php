@extends('layouts.ecom')

@section('content')
  <!-- Media Container -->
  <div class="media-container" style="background-image: url({{ asset('img/cover-photo.png') }});background-position: center;     background-size: cover;height: 475px"></div>
  <!-- END Media Container -->

  <!-- Products -->
  <section class="site-content site-section">
    <div class="container">
      <!-- Seach Form -->
      {{-- <div class="site-block">
        <form action="ecom_search_results.html" method="post">
          <div class="input-group input-group-lg">
            <input type="text" id="ecom-search" name="ecom-search" class="form-control text-center" placeholder="Search Store..">
            <div class="input-group-btn">
              <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
            </div>
          </div>
        </form>
      </div> --}}
      <!-- END Seach Form -->

      <!-- New Arrivals -->
      <h2 class="site-heading"><strong>New</strong> Arrivals</h2>
      <hr>
      <div class="row store-items">
        @foreach($products as $product)
          <div class="col-md-3 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
            <div class="store-item">
              <div class="store-item-rating text-warning">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
              </div>
              <div class="store-item-image">
                <a href="{{ url('/') }}/products/{{ $product->sef_url }}">
                  <img src="{{ asset('products').'/'.$product->photo->file_name }}" alt="" class="img-responsive">
                </a>
              </div>
              <div class="store-item-info clearfix">
                <a href="{{ url('/') }}/products/{{ $product->sef_url }}"><strong>{{ $product->title }}</strong></a><br>
                <s class="store-item-compared-price">&#8369; {{ $product->compared_at_price }}</s>
                <span class="store-item-price themed-color-dark">&#8369; {{ $product->price }} Sale</span>
                {{-- <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small> --}}
              </div>
            </div>
          </div>
        @endforeach
        {{-- <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
          <div class="store-item">
            <div class="store-item-rating text-warning">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <div class="store-item-image">
              <a href="ecom_product.html">
                <img src="{{ asset('img/placeholders/photos/photo29.jpg') }}" alt="" class="img-responsive">
              </a>
            </div>
            <div class="store-item-info clearfix">
              <span class="store-item-price themed-color-dark pull-right">$ 99</span>
              <a href="ecom_product.html"><strong>Jacket</strong></a><br>
              <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
            </div>
          </div>
        </div> --}}
        {{-- <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
          <div class="store-item">
            <div class="store-item-rating text-warning">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <div class="store-item-image">
              <a href="ecom_product.html">
                <img src="{{ asset('img/placeholders/photos/photo27.jpg') }}" alt="" class="img-responsive">
              </a>
            </div>
            <div class="store-item-info clearfix">
              <span class="store-item-price themed-color-dark pull-right">$ 299</span>
              <a href="ecom_product.html"><strong>Watch</strong></a><br>
              <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
            </div>
          </div>
        </div> --}}
        <div class="col-md-12 text-right">
          <a href="ecom_product_list.html"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
        </div>
      </div>
      <!-- END New Arrivals -->

      <!-- Best Sellers -->
      {{-- <h2 class="site-heading"><strong>Best</strong> Sellers</h2>
      <hr>
      <div class="row store-items">
        <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
          <div class="store-item">
            <div class="store-item-rating text-warning">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <div class="store-item-image">
              <a href="ecom_product.html">
                <img src="{{ asset('img/placeholders/photos/photo25.jpg') }}" alt="" class="img-responsive">
              </a>
            </div>
            <div class="store-item-info clearfix">
              <span class="store-item-price themed-color-dark pull-right">$ 109</span>
              <a href="ecom_product.html"><strong>Sunglasses</strong></a><br>
              <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
            </div>
          </div>
        </div>
        <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
          <div class="store-item">
            <div class="store-item-rating text-warning">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <div class="store-item-image">
              <a href="ecom_product.html">
                <img src="{{ asset('img/placeholders/photos/photo28.jpg') }}" alt="" class="img-responsive">
              </a>
            </div>
            <div class="store-item-info clearfix">
              <span class="store-item-price themed-color-dark pull-right">$ 59</span>
              <a href="ecom_product.html"><strong>Gloves</strong></a><br>
              <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
            </div>
          </div>
        </div>
        <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
          <div class="store-item">
            <div class="store-item-rating text-warning">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <div class="store-item-image">
              <a href="ecom_product.html">
                <img src="{{ asset('img/placeholders/photos/photo30.jpg') }}" alt="" class="img-responsive">
              </a>
            </div>
            <div class="store-item-info clearfix">
              <span class="store-item-price themed-color-dark pull-right">$ 99</span>
              <a href="ecom_product.html"><strong>Jacket</strong></a><br>
              <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
            </div>
          </div>
        </div>
        <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
          <div class="store-item">
            <div class="store-item-rating text-warning">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <div class="store-item-image">
              <a href="ecom_product.html">
                <img src="{{ asset('img/placeholders/photos/photo32.jpg') }}" alt="" class="img-responsive">
              </a>
            </div>
            <div class="store-item-info clearfix">
              <span class="store-item-price themed-color-dark pull-right">$ 79</span>
              <a href="ecom_product.html"><strong>Headset</strong></a><br>
              <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
            </div>
          </div>
        </div>
        <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
          <div class="store-item">
            <div class="store-item-rating text-warning">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <div class="store-item-image">
              <a href="ecom_product.html">
                <img src="{{ asset('img/placeholders/photos/photo35.jpg') }}" alt="" class="img-responsive">
              </a>
            </div>
            <div class="store-item-info clearfix">
              <span class="store-item-price themed-color-dark pull-right">$ 1.599</span>
              <a href="ecom_product.html"><strong>Laptop</strong></a><br>
              <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
            </div>
          </div>
        </div>
        <div class="col-md-4 visibility-none" data-toggle="animation-appear" data-animation-class="animation-fadeInQuick" data-element-offset="-100">
          <div class="store-item">
            <div class="store-item-rating text-warning">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star-half-o"></i>
            </div>
            <div class="store-item-image">
              <a href="ecom_product.html">
                <img src="{{ asset('img/placeholders/photos/photo33.jpg') }}" alt="" class="img-responsive">
              </a>
            </div>
            <div class="store-item-info clearfix">
              <span class="store-item-price themed-color-dark pull-right">$ 149</span>
              <a href="ecom_product.html"><strong>Sunglasses</strong></a><br>
              <small><i class="fa fa-shopping-cart text-muted"></i> <a href="javascript:void(0)" class="text-muted">Add to cart</a></small>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-right">
          <a href="ecom_product_list.html"><strong>View All</strong> <i class="fa fa-arrow-right"></i></a>
        </div>
      </div> --}}
      <!-- END Best Sellers -->
    </div>
  </section>
  <!-- END Products -->

  <!-- Explore Store Action -->
  <section class="site-content site-section site-section-light themed-background-dark-night">
    <div class="container">
      <div class="text-center push">
        <div class="push">
          <i class="gi gi-shopping_bag fa-5x text-muted"></i>
        </div>
        <a href="ecom_product_list.html" class="btn btn-lg btn-primary">Explore Store <i class="fa fa-arrow-right"></i></a>
      </div>
    </div>
  </section>
@endsection

@push('styles')
  <style type="text/css">
    .store-item {
      border: none;
      min-height: 380px;
      max-height: 450px;
    }
    .store-item-info {
      background-color: transparent;
    }
  </style>
@endpush