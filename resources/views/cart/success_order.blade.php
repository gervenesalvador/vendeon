@extends('layouts.ecom')

@section('content')
<section class="site-content site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7" style="border-right: #ddd 1px solid;">
				<a href="/"><h1>Vendeon</h1></a>
				
				<div>
					<div>
						<i class="fa fa-check-circle-o" style="font-size: 4.5em"></i>
					</div>
					<div>
						Order #10001
					</div>
					<div>
						Thank you test!
					</div>
				</div>
				<div class="details">
					<div class="details-content">
						<h3>Your order is confirmed</h3>
						<p>We've accepted your order, and were getting it ready. Come back to this page for updates on your order status.</p>
					</div>
				</div>
				<div class="details">
					<div class="details-content">
						<h3>Customer information</h3>
						<table class="table">
							<thead>
								<tr>
									<th>Shipping Address</th>
									<th>Billing Address</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>test</td>
									<td>test</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<table class="table cart">
					<thead>
						@foreach($carts as $key => $cart)
							<tr>
								<td style="position: relative;">
									<div class="cart-image">
										<img src="{{ asset('products').'/'.$cart->product->photo->file_name }}" style="width: 90px;">
									</div>
									<span class="label label-default"><strong>{{ $cart->quantity }}</strong></span>
								</td>
								<td>{{ $cart->product->title }}</td>
								<td>
									&#8369; <span class="item-prices">{{ (int)$cart->price * (int)$cart->quantity }}</span>
								</td>
							</tr>
						@endforeach
					</thead>
				</table>
				<table class="table cart price">
					<thead>
						<tr>
							<td>Subtotal</td>
							<td></td>
							<td>&#8369; <span class="sub_price">0</span></td>
						</tr>
						<tr>
							<td>Shipping</td>
							<td></td>
							<td class="computed">Free</td>
						</tr>
					</thead>
				</table>
				<table class="table price">
					<thead>
						<tr>
							<td>Total</td>
							<td></td>
							<td>&#8369; <span class="total_price">0</span></td>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</section>
@endsection
@push('styles')
	<style type="text/css">
		.details-diffent {
			display: none;
		}
		.details .fields {
			padding-top: 10px;
		}
		.details h3 {
			margin-top: 0;
		}
		.details p,
		.details table {
			margin-bottom: 0;
		}
		.details .fields:last-child {
			padding-bottom: 10px;
		}
		.details.details-diffent {
			overflow: -webkit-paged-x;
		}

		.form-select-list li:hover {
    		background-color: #25bce3;
    	}
    	.form-select-list li a {
		    text-decoration: none;
		}
		.details {
			overflow: auto;
			height: auto;
			border: #dddddd 1px solid;
			border-radius: 10px;
			padding: 0px 15px;
			margin-bottom: 15px;
		}
		.details .details-content {
			padding: 15px 0px;
		    /*border-bottom: #dddddd 1px solid;*/
		    overflow: auto;
	    	height: auto;
		}
		/*.details .details-content:last-child {
			border-bottom: none;
		}
		.details .details-content:first-child {
			border-bottom: #dddddd 1px solid;
		}*/
		.details .col-xs-3 {
			padding: 0;
		}
		.details .col-xs-3 a {
			width: 100%;
			text-align: right;
			display: inline-block;
		}
		.label-custom {
			margin: 20px 0px;
			font-size: 1.75em;
		}
		.cart td {
			position: relative;
		}
		.cart .label {
			position: absolute;
		    top: 9px;
		    right: 13px;
		    padding: 4px;
		    border-radius: 50%;
		    width: 20px;
		    height: 20px;
		}
		.cart-image {
			position: relative;
			border: #ddd 1px solid;
		    border-radius: 10px;
		    width: 75px;
		    overflow: hidden;
		    height: 75px;
		}
		.cart-image img {
			position: absolute;
		    width: 90px;
		    top: -9999px;
		    bottom: -9999px;
		    left: -9999px;
		    right: -9999px;
		    margin: auto;
		}
		.table.cart {
			border-bottom: #ddd 1px solid;
		}
		.table.cart,
		.table.price {
			margin-bottom: 0;
		}
		.table.price .computed {
			text-align: right;
			font-weight: bold;
		}
		.table.price .total {
			text-align: right;
			font-weight: bold;
			font-size: 20px;
		}
		.table >thead > tr > td {
			vertical-align: middle;
			border-color: #fff;
		}
		.table.price tr td:nth-child(3n+3) {
			text-align: right;
		}
	</style>
@endpush

@push('scripts_vendor')
	<script type="text/javascript" src="{{ asset('js/jquery.inputmask.bundle.js') }}" charset="utf-8"></script>
@endpush

@push('scripts')
	<script type="text/javascript">
		compute_price();

		function format (x) {
		  	return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
		}

		function compute_price() {
			let sub_price = 0;
			$('.item-prices').each(function() {
				let price = parseInt($(this).html());
				sub_price += price;
			});

			$('.sub_price').html(format(sub_price));
			$('.total_price').html(format(sub_price));
		}
	</script>
@endpush