@extends('layouts.ecom')

@section('content')
	<section class="site-content site-section">
		<div class="container">
			<div class="row" data-toggle="lightbox-gallery">
				<div class="col-sm-6 push-bit">
					<a href="{{ url('/') }}/products/{{ $product->photos[0]->file_name }}" class="gallery-link">
						<img src="{{ url('/') }}/products/{{ $product->photos[0]->file_name }}" alt="" class="img-responsive push-bit">
					</a>
					
						@foreach($product->photos as $key => $photo)
							<?php $index = $key + 1; ?>
							@if ($index % 3 == 0)
								<div class="row push-bit">
							@endif
							<div class="col-xs-4" val="{{ ($key+1) % 3 }}">
								<a href="{{ url('/') }}/products/{{ $photo->file_name }}" class="gallery-link">
									<img src="{{ url('/') }}/products/{{ $photo->file_name }}" alt="" class="img-responsive">
								</a>
							</div>
							@if ($index % 3 == 0)
								</div>
							@endif
						@endforeach
					
					{{-- <div class="row push-bit">
						<div class="col-xs-4">
							<a href="{{ asset('img/placeholders/photos/photo30.jpg') }}" class="gallery-link">
								<img src="{{ asset('img/placeholders/photos/photo30.jpg') }}" alt="" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-4">
							<a href="{{ asset('img/placeholders/photos/photo29.jpg') }}" class="gallery-link">
								<img src="{{ asset('img/placeholders/photos/photo29.jpg') }}" alt="" class="img-responsive">
							</a>
						</div>
						<div class="col-xs-4">
							<a href="{{ asset('img/placeholders/photos/photo28.jpg') }}" class="gallery-link">
								<img src="{{ asset('img/placeholders/photos/photo28.jpg') }}" alt="" class="img-responsive">
							</a>
						</div>
					</div> --}}
				</div>
				<div class="col-sm-6 push-bit">
					<div class="clearfix">
						<h1>{{ $product->title }}</h1>
						<div class='rating-stars'>
							<ul id='stars'>
								<li class='star selected' title='Poor' data-value='1'>
									<i class='fa fa-star fa-fw'></i>
								</li>
								<li class='star selected' title='Fair' data-value='2'>
									<i class='fa fa-star fa-fw'></i>
								</li>
								<li class='star' title='Good' data-value='3'>
									<i class='fa fa-star fa-fw'></i>
								</li>
								<li class='star' title='Excellent' data-value='4'>
									<i class='fa fa-star fa-fw'></i>
								</li>
								<li class='star' title='WOW!!!' data-value='5'>
									<i class='fa fa-star fa-fw'></i>
								</li>
							</ul>
						</div>
						<div class="price">
							<span class="h4 compared-price"><strong><s>&#x20b1; {{ $product->compared_at_price}}</s></strong></span>
							<span class="h4 main-price"><strong>&#x20b1; {{ $product->price }} Sale</strong></span>
						</div>
						<div class="variant">

							<form action="#" method="post" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6">
										<label for="color">Color</label>
									</div>
									<div class="col-md-6">
										&nbsp;
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<select name="color" id="color" class="form-control variant-select">
												<option>Black</option>
												<option>White</option>
											</select>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<button class="btn btn-danger add-to-cart">Add To Cart</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<div class="trust-badge">
							<img src="{{ asset('img/trust-badge.png') }}" alt="trust-badge" style="width: 100%;">
						</div>
					</div>
					<hr>
					{!! $product->description !!}
					<hr>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('styles')
	<style type="text/css">
		.compared-price {
			color: #788188;
			margin-right: 10px;
		}
		.main-price {
			color: #ff2e2e;
		}
		.variant {
			margin-top: 20px;
		}
		.rating-stars {
			width: 50%;
			text-align: left;
		}
		.rating-stars ul {
		  	list-style-type:none;
		  	padding:0;
		  	-moz-user-select:none;
		  	-webkit-user-select:none;
		}
		.rating-stars ul > li.star {
		 	display:inline-block;
		}
		.rating-stars ul > li.star > i.fa {
		  	font-size: 20px;
		  	color:#ccc;
		}
		.rating-stars ul > li.star.hover > i.fa {
		  	color:#FFCC36;
		}
		.rating-stars ul > li.star.selected > i.fa {
		  	color:#FF912C;
		}
		.form-control.variant-select {
			font-size: 18px;
			height: 38px;
		}
		.btn.add-to-cart {
		    color: #ffffff;
		    font-size: 18px;
		    width: 100%;
		    background-color: #e74c3c;
		    border-color: #9c3428;
		}
		.btn.add-to-cart:hover {
			background-color: #ef8a80;
    		border-color: #e74c3c;
		}
	</style>
@endpush

@push('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
		  $('#stars li').on('mouseover', function(){
		    var onStar = parseInt($(this).data('value'), 10);
		   
		    $(this).parent().children('li.star').each(function(e){
		      if (e < onStar) {
		        $(this).addClass('hover');
		      }
		      else {
		        $(this).removeClass('hover');
		      }
		    });
		    
		  }).on('mouseout', function(){
		    $(this).parent().children('li.star').each(function(e){
		      $(this).removeClass('hover');
		    });
		  });
		  
		  $('#stars li').on('click', function(){
		    var onStar = parseInt($(this).data('value'), 10);
		    var stars = $(this).parent().children('li.star');
		    
		    for (i = 0; i < stars.length; i++) {
		      $(stars[i]).removeClass('selected');
		    }
		    
		    for (i = 0; i < onStar; i++) {
		      $(stars[i]).addClass('selected');
		    }
		    
		    var ratingValue = parseInt($('#stars li.selected').last().data('value'), 10);
		    var msg = "";
		    if (ratingValue > 1) {
		        msg = "Thanks! You rated this " + ratingValue + " stars.";
		    }
		    else {
		        msg = "We will improve ourselves. You rated this " + ratingValue + " stars.";
		    }
		    responseMessage(msg);
		    
		  });
		});


function responseMessage(msg) {
  $('.success-box').fadeIn(200);  
  $('.success-box div.text-message').html("<span>" + msg + "</span>");
}
	</script>
@endpush