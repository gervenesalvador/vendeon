@extends('layouts.ecom')

@section('content')

{{-- <section class='rating-widget'>
	<!-- Rating Stars Box -->
	<div class='rating-stars text-center'>
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
	<div class='success-box'>
		<div class='clearfix'></div>
		<div class='text-message'></div>
		<div class='clearfix'></div>
	</div>
 </section> --}}
	<!-- Product View -->
	<section class="site-content site-section">
		<div class="container">
			<!-- Product Details -->
			<div class="row" data-toggle="lightbox-gallery">
				<!-- Images -->
				<div class="col-sm-6 push-bit">
					<a href="img/placeholders/photos/photo31.jpg" class="gallery-link"><img src="img/placeholders/photos/photo31.jpg" alt="" class="img-responsive push-bit"></a>
					<div class="row push-bit">
						<div class="col-xs-4">
							<a href="img/placeholders/photos/photo30.jpg" class="gallery-link"><img src="img/placeholders/photos/photo30.jpg" alt="" class="img-responsive"></a>
						</div>
						<div class="col-xs-4">
							<a href="img/placeholders/photos/photo29.jpg" class="gallery-link"><img src="img/placeholders/photos/photo29.jpg" alt="" class="img-responsive"></a>
						</div>
						<div class="col-xs-4">
							<a href="img/placeholders/photos/photo28.jpg" class="gallery-link"><img src="img/placeholders/photos/photo28.jpg" alt="" class="img-responsive"></a>
						</div>
					</div>
				</div>
				<!-- END Images -->

				<!-- Info -->
				<div class="col-sm-6 push-bit">
					<div class="clearfix">
						<h1>Anti-Theft Jacket</h1>
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
							<span class="h4 compared-price"><strong><s>&#x20b1; 3,500.00</s></strong></span>
							<span class="h4 main-price"><strong>&#x20b1; 2,000.00 Sale</strong></span>
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
						{{-- <span class="h4"><strong class="text-success">IN STOCK</strong><br><small>15 Available</small></span> --}}
					</div>
					<hr>
					<p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci.</p>
					<p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci.</p>
					<hr>
				</div>
				<!-- END Info -->

				<!-- More Info Tabs -->
				{{-- <div class="col-xs-12 site-block">
					<ul class="nav nav-tabs push-bit" data-toggle="tabs">
						<li class="active"><a href="#product-specs">Specs</a></li>
						<li><a href="#product-description">Description</a></li>
						<li><a href="#product-reviews">Reviews (3)</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="product-specs">
							<table class="table table-borderless table-striped table-vcenter">
								<thead>
									<tr>
										<th colspan="2">Main Features</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 120px;"><strong>Feature #1</strong></td>
										<td>Details</td>
									</tr>
									<tr>
										<td><strong>Feature #2</strong></td>
										<td>Details</td>
									</tr>
									<tr>
										<td><strong>Feature #3</strong></td>
										<td>Details</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless table-striped table-vcenter">
								<thead>
									<tr>
										<th colspan="2">Dimensions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 120px;"><strong>Height</strong></td>
										<td>85cm</td>
									</tr>
									<tr>
										<td><strong>Width</strong></td>
										<td>40cm</td>
									</tr>
								</tbody>
							</table>
							<table class="table table-borderless table-striped table-vcenter">
								<thead>
									<tr>
										<th colspan="2">More Info</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td style="width: 120px;"><strong>Info #1</strong></td>
										<td>Details</td>
									</tr>
									<tr>
										<td><strong>Info #2</strong></td>
										<td>Details</td>
									</tr>
									<tr>
										<td><strong>Info #3</strong></td>
										<td>Details</td>
									</tr>
								</tbody>
							</table>
						</div>
						<div class="tab-pane" id="product-description">
							<p>Maecenas ultrices, justo vel imperdiet gravida, urna ligula hendrerit nibh, ac cursus nibh sapien in purus. Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget!</p>
							<p>Mauris tincidunt tincidunt turpis in porta. Integer fermentum tincidunt auctor. Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales! Suspendisse potenti. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit. Ut egestas tempor est, in cursus enim venenatis eget! Nulla quis ligula ipsum.</p>
							<p>Vestibulum ullamcorper, odio sed rhoncus imperdiet, enim elit sollicitudin orci, eget dictum leo mi nec lectus. Nam commodo turpis id lectus scelerisque vulputate. Integer sed dolor erat. Fusce erat ipsum, varius vel euismod sed, tristique et lectus? Etiam egestas fringilla enim, id convallis lectus laoreet at. Fusce purus nisi, gravida sed consectetur ut, interdum quis nisi. Quisque egestas nisl id lectus facilisis scelerisque? Proin rhoncus dui at ligula vestibulum ut facilisis ante sodales!</p>
						</div>
						<div class="tab-pane" id="product-reviews">
							<ul class="media-list push">
								<li class="media">
									<a href="javascript:void(0)" class="pull-left">
										<img src="img/placeholders/avatars/avatar6.jpg" alt="Avatar" class="img-circle">
									</a>
									<div class="media-body">
										<div class="text-warning pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<a href="javascript:void(0)"><strong>Customer</strong></a><br>
										<span class="text-muted"><small><em>2 hours ago</em></small></span>
										<p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
									</div>
								</li>
								<li class="media">
									<a href="javascript:void(0)" class="pull-left">
										<img src="img/placeholders/avatars/avatar13.jpg" alt="Avatar" class="img-circle">
									</a>
									<div class="media-body">
										<div class="text-warning pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<a href="javascript:void(0)"><strong>Customer</strong></a><br>
										<span class="text-muted"><small><em>2 hours ago</em></small></span>
										<p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
									</div>
								</li>
								<li class="media">
									<a href="javascript:void(0)" class="pull-left">
										<img src="img/placeholders/avatars/avatar9.jpg" alt="Avatar" class="img-circle">
									</a>
									<div class="media-body">
										<div class="text-warning pull-right">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<a href="javascript:void(0)"><strong>Customer</strong></a><br>
										<span class="text-muted"><small><em>2 hours ago</em></small></span>
										<p>Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti.</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div> --}}
				<!-- END More Info Tabs -->
			</div>
			<!-- END Product Details -->
			
		</div>
	</section>
	<!-- END Product View -->
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
		  /* 1. Visualizing things on Hover - See next part for action on click */
		  $('#stars li').on('mouseover', function(){
		    var onStar = parseInt($(this).data('value'), 10); // The star currently mouse on
		   
		    // Now highlight all the stars that's not after the current hovered star
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
		  
		  
		  /* 2. Action to perform on click */
		  $('#stars li').on('click', function(){
		    var onStar = parseInt($(this).data('value'), 10); // The star currently selected
		    var stars = $(this).parent().children('li.star');
		    
		    for (i = 0; i < stars.length; i++) {
		      $(stars[i]).removeClass('selected');
		    }
		    
		    for (i = 0; i < onStar; i++) {
		      $(stars[i]).addClass('selected');
		    }
		    
		    // JUST RESPONSE (Not needed)
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