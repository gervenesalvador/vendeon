@extends('layouts.ecom')

@section('content')
<section class="site-content site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7" style="border-right: #ddd 1px solid;">
				<a href="/"><h1>Vendeon</h1></a>
				<div class="breadcrumb">
					<li class="active">
						<a href="/cart"><span>Cart</span></a>
					</li>
					<li>
						<a href="/checkout"><span>Customer Information</span></a>
					</li>
					<li>
						<span>Shipping Method</span>
					</li>
					<li>
						<span>Payment method</span>
					</li>
				</div>
				<div class="details">
					<div class="details-content">
						<div class="col-sm-2 col-xs-3">Contact</div>
						<div class="col-sm-8 col-xs-6">+ 63{{ $checkout->contact_number }}</div>
						<div class="col-sm-2 col-xs-3"><a href="/test">Change</a></div>
					</div>
					<div class="details-content">
						<div class="col-sm-2 col-xs-3">Ship to</div>
						<div class="col-sm-8 col-xs-6">{{ $checkout->complete_address }}</div>
						<div class="col-sm-2 col-xs-3"><a href="/test">Change</a></div>
					</div>
					<div class="details-content">
						<div class="col-sm-2 col-xs-3">Method</div>
						<div class="col-sm-8 col-xs-6">
							{{ $order->shipping_method }} &#9679 {{ $order->shipping_method_price == 0 ? 'Free' : '&#8369;'.$order->shipping_method_price }}
						</div>
						<div class="col-sm-2 col-xs-3">&nbsp</div>
					</div>
				</div>

				<form action="{{ route('paymentMethod') }}" method="POST">
					<div class="label-custom">Payment Method</div>
					<div class="details">
						<div class="col-sm-10">
							<div class="details-content radio">
		                        <label for="payment_method">
		                            <input type="radio" id="payment_method" name="payment_method" value="Cash on Delivery Free"> Cash on Delivery
		                        </label>
		                    </div>
						</div>
						<div class="col-sm-2">
							<div class="details-content">
								<span><strong>Free</strong></span>
							</div>
						</div>
					</div>

					<div class="label-custom">Billing Address</div>
					<div class="details">
						<div class="col-sm-12">
							<div class="details-content radio">
		                        <label for="billing_address_same">
		                            <input type="radio" id="billing_address_same" name="billing_method" value="same" required> Same as shipping address
		                        </label>
		                    </div>
						</div>
						<div class="col-sm-12">
							<div class="details-content radio">
		                        <label for="billing_address_different">
		                            <input type="radio" id="billing_address_different" name="billing_method" value="different"> Use a different billing address
		                        </label>
		                    </div>
						</div>
					</div>

					<div class="details details-diffent">
						<div class="col-md-6 col-xs-12 fields">
	                        <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name">
						</div>
						<div class="col-md-6 col-xs-12 fields">
	                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name">
						</div>
						<div class="col-md-12 fields">
	                        <input type="text" id="city" name="city" class="form-control form-select" placeholder="City" autocomplete="off">
		                	<ul id="city_list" class="form-select-list">
		                		@foreach($cities as $key => $city)
									<li><span>{{ $city }}</span></li>
								@endforeach
							</ul>
						</div>
						<div class="col-md-12 fields">
	                        <input type="text" id="barangay" name="barangay" class="form-control" placeholder="Barangay">
						</div>
						<div class="col-md-12 fields">
	                        <input type="text" id="complete_address" name="complete_address" class="form-control" placeholder="Complete Address(Home #, Street, Subd...)">
						</div>
						<div class="col-md-6 col-xs-12 fields">
	                        <input type="text" id="country" name="country" class="form-control" placeholder="Country" readonly>
						</div>
						<div class="col-md-6 col-xs-12 fields">
	                        <input type="text" id="zip_code" name="zip_code" class="form-control" placeholder="Country">
						</div>
						<div class="col-md-12 fields">
							<div class="input-group">
								<span class="input-group-addon">+63</span>
								<input type="text" id="contact_number" name="contact_number" class="form-control" placeholder="Enter Your Contact Number Here" autocomplete="off">
							</div>
						</div>
					</div>

					<div class="form-group">
		            	<div class="row">
		            		<div class="col-md-5 col-md-offset-7">
		                		<button type="submit" class="btn btn-sm btn-primary" style=""> Complete Order</button>
		            		</div>
		            	</div>
		            </div>
		        </form>
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
		.details .fields:last-child {
			padding-bottom: 10px;
		}
		.details.details-diffent {
			overflow: -webkit-paged-x;
		}
		.form-select-list { 
		    background-color: white;
		    list-style-type: none;
		    padding: 0;
		    border: #a2a2a2 1px solid;
		    position: absolute;
		    z-index: 1000;
		    width: 100%;
		    display: none;
		    height: 250px;
    		overflow-y: auto;
		}
		.form-select:focus ~ .form-select-list {
			display: block;
		}
		.form-select-list li {
		    padding: 5px 10px;
    		cursor: pointer;
    		color: black;
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
		}
		.details .details-content {
			padding: 15px 0px;
		    border-bottom: #dddddd 1px solid;
		    overflow: auto;
	    	height: auto;
		}
		.details .details-content:last-child {
			border-bottom: none;
		}
		.details .details-content:first-child {
			border-bottom: #dddddd 1px solid;
		}
		.details .col-xs-3 {
			padding: 0;
		}
		.details .col-xs-3 a {
			width: 100%;
			text-align: right;
			display: inline-block;
		}
		.form-group {
			margin-top: 15px;
		}
		.form-group .btn {
			width: 100%;
			height: 50px;
			font-size: 16px;
		}
		.radio {
			margin: 0;
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

		$('#city').keyup((event) => {
			search('#city', 'city_list');
		});

		$('#city_list').on('mousedown', 'li', function(event) {
			let span = $(this).find('span').html();
			$("#city").val(span);
		});

		const search = (input_id, list_id) => {
			var input, filter, ul, li, a, i;
			input = $(input_id);
			filter = input.val().toUpperCase();
			ul = document.getElementById(list_id);
			li = ul.getElementsByTagName("li");
			for (i = 0; i < li.length; i++) {
				a = li[i].getElementsByTagName("span")[0];
				if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
					li[i].style.display = "";
				} else {
					li[i].style.display = "none";
				}
			}
		}

		$('#billing_address_different').click(function() {
			if ($(this).is(':checked')) {
				$('.details-diffent').css('display', 'block');
			} 
		});

		$('#billing_address_same').click(function() {
			if ($(this).is(':checked')) {
				$('.details-diffent').css('display', 'none');
			} 
		});

		$("#contact_number").inputmask({
			mask: '999-999-9999'
		});

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