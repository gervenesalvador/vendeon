@extends('layouts.ecom')

@section('content')
	<!-- Shopping Cart -->
	<section class="site-content site-section">
		<form action="{{ route('update_cart') }}" method="POST">
			@csrf
			<div class="container">
				<div class="table-responsive">
					<table class="table table-bordered table-vcenter">
						<thead>
							<tr>
								<th colspan="2">Product</th>
								<th class="text-center">QTY</th>
								<th class="text-right">Unit Price</th>
								<th class="text-right">Price</th>
							</tr>
						</thead>
						<tbody>
							@foreach($carts as $key => $cart)
								<tr>
									<td style="width: 200px;">
										<img src="{{ asset('products').'/'.$cart->product->photo->file_name }}" alt="" style="width: 180px;">
									</td>
									<td>
										<strong>{{ $cart->product->title }}</strong><br>
										@isset($cart->variants_1) {{ $cart->variants_1 }} @endisset @isset($cart->variants_2) - {{ $cart->variants_2 }} @endisset @isset($cart->variants_3) - {{ $cart->variants_2 }} @endisset <br>
										{{-- <strong class="text-success">In stock</strong> - 24h Delivery --}}
									</td>
									<td class="text-center">
										<input type="hidden" name="carts[{{ $cart->id }}][id]" value="{{ $cart->id }}">
										<input type="hidden" name="carts[{{ $cart->id }}][price]" value="{{ $cart->price }}">
										<input type="number" name="carts[{{ $cart->id }}][quantity]" value="{{ $cart->quantity }}" class="form-control quantity" data-cart="{{ $cart->id }}">
										<a href="javascript:void(0)" class="btn btn-xs btn-success quantity-plus" data-toggle="tooltip" title="Add" data-price="{{ $cart->price }}" data-cart="{{ $cart->id }}"><i class="fa fa-plus"></i></a>
										<a href="javascript:void(0)" class="btn btn-xs btn-danger quantity-minus" data-toggle="tooltip" title="Remove" data-price="{{ $cart->price }}" data-cart="{{ $cart->id }}"><i class="fa fa-minus"></i></a>
									</td>
									<td class="text-right">&#x20b1; {{ $cart->price }}</td>
									<td class="text-right"><strong>&#x20b1; </strong><strong class="price" data-cart="{{ $cart->id }}">{{-- $cart->price --}}</strong></td>
								</tr>
							@endforeach
							<tr>
								<td colspan="4" class="text-right h4"><strong>Sub Total</strong></td>
								<td class="text-right h4"><strong>&#x20b1; </strong><strong class="sub-total"> 0</strong></td>
							</tr>
							{{-- <tr>
								<td colspan="4" class="text-right h4"><strong>VAT (20%)</strong></td>
								<td class="text-right h4"><strong>$181,40</strong></td>
							</tr> --}}
							{{-- <tr class="active">
								<td colspan="4" class="text-right text-uppercase h4"><strong>Total Price</strong></td>
								<td class="text-right text-success h4"><strong>$1088,40</strong></td>
							</tr> --}}
						</tbody>
					</table>
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