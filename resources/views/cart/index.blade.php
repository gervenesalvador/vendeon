@extends('layouts.ecom')

@section('content')
	<!-- Shopping Cart -->

	<section class="site-content site-section">
		<div class="container text-center">
            <h1 class="animation-slideDown"><i class="fa fa-shopping-cart"></i> <strong>Shopping Cart</strong></h1>
        </div>
		<form action="{{ route('update_cart') }}" method="POST">
			@csrf
			<div class="container">
				<div class="row cart-item">
					<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 description">
						<div class="row">
							<div class="col-xs-4">
								{{-- image --}}
								<div class="cart-image">
									<img src="http://localhost:8000/products/10440269_772646216152186_1633700425135504175_n.jpg" alt="">
								</div>
							</div>
							<div class="col-xs-8">
								{{-- details --}}
								<div class="cart-details">
									<span><strong>Electric Shoe Boot Warmer/Dryer - 1</strong><br>Medium</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12 text-center">
						<div class="row">
							<div class="col-xs-6 col-fix">
								<input type="number" name="carts[1][quantity]" value="2" class="form-control quantity" data-cart="1">
								<a href="javascript:void(0)" class="btn btn-xs btn-success quantity-plus" data-toggle="tooltip" title="Add" data-price="500" data-cart="1"><i class="fa fa-plus"></i></a>
								<a href="javascript:void(0)" class="btn btn-xs btn-danger quantity-minus" data-toggle="tooltip" title="Remove" data-price="500" data-cart="1"><i class="fa fa-minus"></i></a>
							</div>
							<div class="col-xs-6 col-fix">
								<strong>&#x20b1; </strong><strong class="price" data-cart="1"></strong>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-7 col-md-2 col-md-offset-6">
						<a href="ecom_product_list.html" class="btn btn-block btn-default">Continue Shopping</a>
					</div>
					<div class="col-xs-7 col-md-2">
						<button type="submit" class="btn btn-block btn-default">Update Cart</button>
					</div>
					<div class="col-xs-5 col-md-2">
						<a href="{{ route('checkout') }}" class="btn btn-block btn-danger">Checkout</a>
					</div>
				</div>
			</div>
		</form>
	</section>
	<!-- END Shopping Cart -->
@endsection

@push('styles')
	<style type="text/css">
		.container {
			margin-bottom: 20px;
		}
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
		  -webkit-appearance: none; 
		}
		.form-control.quantity {
			width: 50px;
			display: inline-block;
		}
		.cart-image {
		    position: relative;
		    width: 100%;
		}
		.cart-image img {
		    width: 100%;
		}
		.item-title {
			font-weight: bold;
		}
		.cart-item {
		    vertical-align: middle;
		}
		@media screen and (min-width: 768px) {
			.cart-item .col-md-4,
			.cart-item .col-md-8,
			.cart-item .col-md-2,
			.cart-item .col-xs-4,
			.cart-item .col-xs-8 {
				display: table-cell;
			    vertical-align: middle;
			    float: none;
			}
		}
		@media screen and (max-width: 768px) {
			.cart-item .col-xs-12 {
				margin-bottom: 10px;
			}
			.cart-details {
				text-align: center;
			}
		}
	</style>
@endpush

@push('scripts')
	<script type="text/javascript">
		$(document).ready(function() {
			
			$('.quantity-plus').click(function() {
				let cart = $(this).attr('data-cart');
				let current_quantity = parseInt($('.quantity[data-cart='+cart+']').val());
				let quantity = current_quantity + 1;

				changeProductPrice(cart, quantity, $(this).attr('data-price'));
			});

			$('.quantity-minus').click(function() {
				let cart = $(this).attr('data-cart');
				let current_quantity = parseInt($('.quantity[data-cart='+cart+']').val());
				let quantity = current_quantity - 1;
				if (quantity >= 1) {
					changeProductPrice(cart, quantity, $(this).attr('data-price'));
				}
			});

			const changeProductPrice = (cart_id, quantity, product_price) => {
				$('.quantity[data-cart='+cart_id+']').val(quantity);
				$('.price[data-cart='+cart_id+']').html((product_price * quantity).toFixed(2));
				sub_total();
			};

			const sub_total = () => {
				let total = 0;
				$('.price').each(function() {
					total += parseInt($(this).html());
				});

				$('.sub-total').html(total.toFixed(2));
			}

			$('.quantity-plus').each(function() {
				let cart = $(this).attr('data-cart');
				let current_quantity = parseInt($('.quantity[data-cart='+cart+']').val());

				changeProductPrice(cart, current_quantity, $(this).attr('data-price'));
			});
		});


 	</script>
@endpush