@extends('layouts.ecom')

@section('content')
<section class="site-content site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7" style="border-right: #ddd 1px solid;">
				<a href="/"><h1>Vendeon</h1></a>
				<div class="breadcrumb">
					<li class="active">
						<a href="/cart">Cart</a>
					</li>
					<li>
						<span>Customer Information</span>
					</li>
					<li>
						<span>Shipping Method</span>
					</li>
					<li>
						<span>Payment method</span>
					</li>
				</div>
				<form action="{{ route('checkout_action') }}" method="POST">
					<div class="label-custom">Contact Information</div>
					<div class="form-group form-custom">
	                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email Here" required>
	                    <label for="email">Email address</label>
	                </div>
					<div class="input-group form-custom">
					    <span class="input-group-addon">+63</span>
					    <input type="text" id="contact_number" name="contact_number" class="form-control" placeholder="Enter Your Contact Number Here">
					    <label for="contact_number" style="left: 50px;z-index: 3;">Contact Number</label>
					    <span class="input-group-addon"><img src="{{ asset('img/philippine-flag.jpg') }}" alt="ph" style="width: 40px;height: 30px;"></span>
					</div>
	                <div class="label-custom" style="margin-top: 20px;">Shipping Information</div>
					<div class="form-group form-custom">
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" required>
								<label for="email">First name</label>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" required>
								<label for="email">Last name</label>
							</div>
						</div>
	                </div>
	                <div class="form-group form-custom">
	                	<input type="text" id="city" name="city" class="form-control form-select" placeholder="City" required>
	                	<label for="email">City</label>
	                	<ul id="city_list" class="form-select-list">
	                		@foreach($cities as $key => $city)
								<li><span>{{ $city }}</span></li>
							@endforeach
						</ul>
	                </div>
	                <div class="form-group form-custom">
	                	<input type="text" id="barangay" name="barangay" class="form-control" placeholder="Barangay" required>
	                	<label for="email">Barangay</label>
	                </div>
	                <div class="form-group form-custom">
	                	<input type="text" id="address" name="address" class="form-control" placeholder="Complete Address(Home #, Street, Subd...)" required>
	                	<label for="email">Complete Address(Home #, Street, Subd...)</label>
	                </div>
	                <div class="form-group form-custom">
	                	<div class="row">
	                		<div class="col-md-6 col-xs-12">
	                			<input type="text" id="city" name="city" class="form-control" placeholder="City" required value="Philippines" readonly>
	                		</div>
	                		<div class="col-md-6 col-xs-12">
	                			<input type="text" id="postal" name="postal" class="form-control" placeholder="Postal" required value="Philippines">
	                		</div>
	                	</div>
	                </div>

	                <div class="form-group">
	                	<div class="row">
	                		<div class="col-md-5 col-md-offset-7">
	                    		<button type="submit" class="btn btn-sm btn-primary" style="width: 100%;height: 50px;font-size: 16px;"> Continue to Shipping Method</button>
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
		.label-custom {
			font-size: 20px;
		    margin-bottom: 10px;
		    font-weight: normal;
		    display: inline-block;
    		max-width: 100%;
		}
		.form-custom {
			position: relative;
		}
		.form-custom label {
			font-size: .9rem;
		    position: absolute;
		    padding-left: .75rem;
		    color: #6f6f6f;
		    top: 0;
		    display: none;
		}
		.form-custom input {
			height: 45px;
			padding: .375rem .75rem;
		}

		.form-custom input:focus {
			padding: 1rem .75rem 0 .75rem;
		}
		.form-custom input:focus ~ label {
			display: inline-block;
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

		$("#contact_number").inputmask({
			mask: '999-999-9999'
		});

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