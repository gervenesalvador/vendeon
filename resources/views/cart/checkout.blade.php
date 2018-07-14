@extends('layouts.ecom')

@section('content')
<section class="site-content site-section">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<a href="/"><h1>Vendeon</h1></a>
				<div class="breadcrumb">
					<li class="active">
						<a href="/cart">Cart</a>
					</li>
					<li>
						<span>Customer Information</span>
					</li>
				</div>
				<form>
					<div class="label-custom">Contact Information</div>
					<div class="form-group form-custom">
	                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter Your Email Here" required>
	                    <label for="email">Email address</label>
	                </div>

	                <div class="label-custom">Shipping Information</div>
					<div class="form-group form-custom">
						<div class="row">
							<div class="col-md-6 col-xs-12">
								<input type="text" id="firstname" name="firstname" class="form-control" placeholder="First name" required>
								<label for="email">First name</label>
							</div>
							<div class="col-md-6 col-xs-12">
								<input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last name" required>
								<label for="email">Last name</label>
							</div>
						</div>
	                </div>
	                <div class="form-group form-custom">
	                	<input type="text" id="city" name="city" class="form-control form-select" placeholder="City" required>
	                	<label for="email">City</label>
	                	<ul id="city_list" class="form-select-list">
							<li class="aa"><span>Adele</span></li>
							<li class="aa"><span>Agnes</span></li>

							<li class="aa"><span>Billy</span></li>
							<li class="aa"><span>Bob</span></li>

							<li class="aa"><span>Calvin</span></li>
							<li class="aa"><span>Christina</span></li>
							<li class="aa"><span>Cindy</span></li>
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
	                <select name="city" class="form-control">
	                	<option>test</option>
	                	<option>test</option>
	                	<option>test</option>
	                </select>

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
				<div class="cart-list">
					<div></div>
				</div>
			</div>
		</div>
		
	</div>
</section>
@endsection

@push('styles')
	<style type="text/css">
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
	</style>
@endpush

@push('scripts')
	<script type="text/javascript">

		$('#city').keyup((event) => {
			search('#city', 'city_list');
		});

		$('#city_list').on('mousedown', '.aa', (event) => {
			let span = $(this);
			console.log(span);
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
	</script>
@endpush