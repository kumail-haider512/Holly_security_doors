@extends('layouts.master')
@section('title','External Bi-fold Doors: Folding & Sliding Glass Patio Doors')
@section('css')
@section('content')
	<div id="content_wrap">
		<div class="content">
			<div id="breadcrumbs">
				<a href="{{route('home')}}" title="Holly Security Doors Home">Home</a> <span>〉</span> Checkout
			</div>
			<form method="POST" action="{{ route('checkout.save')}}">
				@csrf
				<div class="flex checkout_wrap">
					<div class="c_80 mobile_wide">
						<h4>Your Order Summary</h4>
					</div>
					<div class="c_20">
						
					</div>
					
					<div class="c_80 mobile_wide">
						<div class="flex cart">
							<div class="c_20 non_mobile">
								<div class="inner table_title">Image
							</div>
						</div>
						<div class="c_35">
							<div class="inner table_title">Product
							</div>
						</div>
						<div class="c_20">
							<div class="inner table_title">Quantity
							</div>
						</div>
						<div class="c_25">
							<div class="inner table_title">Sub Total
							</div>
						</div>
						@foreach($product as $item)
						<input type="hidden" name="product_id[]" value="{{$item->id}}" class="product_id">
						<div class="c_20 non_mobile">
							<div class="inner">
								<img src="{{asset($item->image)}}" style="object-fit: cover;height: 132px;">
							</div>
						</div>
						
						<div class="c_35">
							<div class="inner">{{$item->name}}<br>
							</div>
						</div>
						<div class="c_20">
							<div class="inner">
								<div class="flex cart_opts">
									<div class="c_20"><span>{{$item->quantity}}</span>
									</div>
									<div class="c_50">
										<a href="{{route('product.delete',$item->id)}}" title="Remove All"><img src="{{asset('img/del.png')}}" alt="Remove All"></a>
									</div>
								</div>
							</div>
						</div>
						<div class="c_25">
							<div class="inner">£<span class="price_1">{{$item->price}}</span>.00
							</div>
						</div>
						@endforeach 
						<div class="c_100">
							<div class="flex">
								<div class="c_55 blank top_border non_mobile">
									<div class="inner">
										
									</div>
								</div>
								<div class="c_45 m_100">
									<div class="flex">
										<div class="c_45 top_border brown_border m_33">
											<div class="inner"><p class="bold">Subtotal</p>
											</div>
										</div>
										<div class="c_55 top_border brown_border m_66">
											<div class="inner "><p class="total_sum">£{{ $product->sum('price') }}.00</p>
											</div>
										</div>
										<div class="c_45 top_border m_33">
											<div class="inner"><p class="bold">Shipping</p>
											</div>
										</div>
										<div class="c_55 top_border m_66">
											<div class="inner"><p><input name="ship" type="radio" value="" checked="checked"> Delivered (£0.00)<br>
												<input name="ship" type="radio" value="collect"> Collect from DE24 (£0.00)</p>
											</div>
										</div>
										<div class="c_100 mobile">
											<div class="inner">
											</div>
										</div>
										<div class="c_45 top_border total_tag m_33">
											<div class="inner"><p class="bold large">Total</p>
											</div>
										</div>
										<div class="c_55 top_border total_tag m_66">
											<div class="inner"><p class="large">
												<span id="total_cost">£{{ $product->sum('price') }}.00</span></p>
											</div>
										</div>
									</div>
									
									</div>
								</div>
								<div class="checkout_details">
										<div class="flex">
											<div class="c_100">
												<p class="bold grey">Billing Details</p>
												
													<div class="flex">
														<div class="c_33">
															<label for="b_first">First Name*</label>
															<input name="b_first" type="text" value="" id="b_first" maxlength="20" placeholder="Required" required>
														</div>

														<div class="c_33">
															<label for="b_surname">Surname*</label>
															<input name="b_surname" type="text" value="" id="b_surname" maxlength="20" placeholder="Required" required>
														</div>

														<div class="c_33">
															<label for="b_email">Email*</label>
															<input name="b_email" type="text" value="" id="b_email" placeholder="Required" required>
														</div>

														<div class="c_33">
															<label for="b_telephone">Telephone*</label>
															<input name="b_telephone" type="text" value="" placeholder="Required" required>
														</div>

														<div class="c_33">
															<label for="b_telephone_alt">Alternate Telephone*</label>
															<input name="b_telephone_alt" type="text" value="" placeholder="Required" required>
														</div>

														<div class="c_33">
															<label for="b_address1">Address Line 1*</label>
															<input name="b_address1" type="text" value="" placeholder="Required" required>
														</div>

														<div class="c_33">
															<label for="b_city">Town/City*</label>
															<input name="b_city" type="text" value="" placeholder="Required" required>
														</div>

														<div class="c_33">
															<label for="b_county">County*</label>
															<input name="b_county" type="text" value="" placeholder="Required" required>
														</div>

														<div class="c_33">
															<label for="b_postcode">Postcode*</label>
															<input name="b_postcode" type="text" value="" placeholder="Required" required>
														</div>

													</div>
													<p class="right">
													<button type="submit" title="Proceed" class="btn btn-primary" style="margin:15px;">Checkout Now</button></p> 
												
												
											</div>
										</div>
									</div>
							</div>
						</div>
					</div>
					<div class="c_20 mobile_wide">
						<div class="flex sales">
							<div class="c_33">
								<div class="msg"><a href="#" title="Free Delivery">Free Delivery <br>in 3-7 Days*</a>
								</div>
							</div>
							<div class="c_33">
								<div class="msg"><a href="#" title="All prices include VAT">All prices<br>include VAT</a>
								</div>
							</div>
							<div class="c_33">
								<div class="msg"><a href="#" title="10 Year Guarantee">10 Year<br>Guarantee</a>
								</div>
							</div>
						</div>
						<p class="disclaimer">* On orders over £750. To most mainland locations</p>
						<div class="further_information">
							<h4>We Accept</h4>
							<p><img src="#" alt="Payment Logos"></p>

							<h5>Need Help?</h5>
							<ul class="help">
								<li class="email"><a href="mailto:admin@hollysecuritydoors.co.uk" title="Email Holly Security Doors">Email Us</a></li>
								<li class="telephone"><span class="rTapNumber53432">01442781148</span><br><span class="times">01442781148 Mon–Fri</span></li>
							</ul>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection
@section('js')
<script>
	$(document).on('click','.proceed',function(){
		// alert("hello");
		var product_id=$('.product_id').val();
		var total_cost =$('.total_cost').text();

	})
</script>
@endsection