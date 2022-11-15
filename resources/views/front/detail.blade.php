@extends('layouts.master')
@section('title','External Bi-fold Doors: Folding & Sliding Glass Patio Doors')
@section('css')
<style type="text/css">
	.img-thumbnail
	{
		width: 95%;
	}
	.checkout
	{
		background-color: #e70037;
	    color: #fff;
	    border: none;
	    padding: 6px 20px;
	    font-family: 'Graphik Medium', 'GraphikRegular', Helvetica, Arial, " sans-serif";
	    font-size: 1.077rem;
	    -webkit-appearance: none;
	    border-radius: 0;
}
</style>
@section('content')
<div id="content_wrap">
	<div class="content">
		<div id="breadcrumbs">
			<ul>
				<li>
					<a href="{{route('home')}}" title="Holly Security Doors Home">Home</a>
				</li>
			</ul>
		</div>
		<div class="flex to_top">
			<div class="c_50">
				<img src="{{asset($sub->image)}}" class="img-thumbnail">
			</div>
			<div class="c_50 detail">
				<h1>{{$sub->name}}</h1>
				<div class="flex">
					<div class="c_85">
						<div class="c_100">
							<div itemprop="offers" itemscope="" itemtype="https://schema.org/Offer">
								<p class="price">Only £<span class="to_price">{{$sub->price}}</span><meta itemprop="availability" content="https://schema.org/InStock"> <span class="green"></span><br>
								</p>
							</div>
							<form id="buy" method="post" action="{{route('product.save')}}">
								@csrf
								<input type="hidden" name="sub_cat" value="{{$sub->id}}">
								<input type="hidden" name="total_price" class="total_price">
								<input type="hidden" name="total_quantity" class="total_quantity" >
								<input name="quantity" type="text" placeholder="1" value="1" class="quan">
								<div class="buttons">
									<a href="" title="Minus" class="minus">
										<img src="{{asset('img/button-minus.png')}}" alt="Minus" class="minus-btn">
									</a>
									<a href="#" title="Plus" class="plus">
										<img src="{{asset('img/button-plus.png')}}" alt="Plus" class="plus-btn">
									</a>
								</div>
								<label>Quantity</label>
								<input name="submit" type="submit" value="Buy Now" class="buy_now">
								@if(itemCount() != 0)
									<a href="{{route('product.checkout')}}" titl="Checkout" class="btn">Checkout</a>
								@endif
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flex sales">
			<div class="c_33">
				<div class="msg"><a href="#" title="Free Delivery">Free Delivery <br>in Please note: temporary 3-5 week manufacturing time for these doors due to a delay on materials.*</a>
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
		<div class="c_100" style="margin: 40px;">
			<div class="description">
				<h5>Description</h5>
				<div class="detail_wrap">
					<p>{!!$sub->description!!}</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script>
	$(document).on('click','.minus-btn',function(e){
		e.preventDefault();
		var quan=$('.quan').val();
		if(quan > 0)
		{
			quan--;
			$('.quan').val(quan);
		}
		else
		{
			
		}
	});
	$(document).on('click','.plus-btn',function(e){
		e.preventDefault();
		var quan=$('.quan').val();

		quan++;
		$('.quan').val(quan);
	});
	$(document).on('click','.buy_now',function(e){
		// e.preventDefault();
		var quan=$('.quan').val();
		var price=$('.to_price').text();
		var new_pr=price.replace(',','')*1;
		total_price=quan*new_pr;
		$('.total_price').val(total_price);
		$('.total_quantity').val(quan);
		$('#buy').submit();
	})
</script>
@endsection