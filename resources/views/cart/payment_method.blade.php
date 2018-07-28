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
					<div class="contacts">
						<div class="col-sm-2 col-xs-3">Contact</div>
						<div class="col-sm-8 col-xs-6">+ 99999999</div>
						<div class="col-sm-2 col-xs-3"><a href="/test">Change</a></div>
					</div>
					<div class="ship">
						<div class="col-sm-2 col-xs-3">Ship to</div>
						<div class="col-sm-8 col-xs-6">+ 99999999</div>
						<div class="col-sm-2 col-xs-3"><a href="/test">Change</a></div>
					</div>
					<div class="method">
						<div class="col-sm-2 col-xs-3">Ship to</div>
						<div class="col-sm-8 col-xs-6">+ 99999999</div>
						<div class="col-sm-2 col-xs-3"><a href="/test">Change</a></div>
					</div>
				</div>

				<div class="label-custom">Shipping Information</div>

				<div class="details">
					<div class="col-sm-10">
						<div class="radio">
	                        <label for="example-radio1">
	                            <input type="radio" id="example-radio1" name="example-radios" value="option1"> Standard Shipping
	                        </label>
	                    </div>
					</div>
					<div class="col-sm-2">
						<span><strong>Free</strong></span>
					</div>
				</div>

				<div class="form-group">
	            	<div class="row">
	            		<div class="col-md-5 col-md-offset-7">
	                		<button type="submit" class="btn btn-sm btn-primary" style=""> Continue to Shipping Method</button>
	            		</div>
	            	</div>
	            </div>
				<style type="text/css">
					.form-group {
						margin-top: 15px;
					}
					.form-group .btn {
						width: 100%;
						height: 50px;
						font-size: 16px;
					}
					.details {
						overflow: auto;
						height: auto;
						border: #dddddd 1px solid;
						border-radius: 10px;
						padding: 15px 15px;
					}
					.details .contacts,
					.details .ship
					.details .method {
						overflow: auto;
						height: auto;
					}
					.details .contacts
					.details .ship {
						padding-bottom: 15px;
						border-bottom: #dddddd 1px solid;
					}
					.details .ship { 
						padding-top: 15px;
					}
					.details .col-xs-3 {
						padding: 0;
					}
					.details .col-xs-3 a {
						width: 100%;
						text-align: right;
						display: inline-block;
					}
					.radio {
						margin: 0;
					}
					.label-custom {
						margin: 20px 0px;
    					font-size: 1.75em;
					}
				</style>
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
		$("#contact_number").inputmask({
			mask: '999-999-9999'
		});
	</script>
@endpush