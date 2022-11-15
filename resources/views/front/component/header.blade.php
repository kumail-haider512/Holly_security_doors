<div class="header_wrap">
	<div id="header">
		<div class="flex">
			<div class="c_65" itemscope="" itemtype="https://schema.org/Brand">
			<a href="{{route('home')}}" title="Holly Security Doors">
				<p class="header-title">HOLLYSECURITYDOORS</p>
				<p class="strapline">Quality External and Internal Doors at Great Prices</p>
			</div>
			<div class="c_35">
			<div class="cart_wrap">
				<img src="{{asset('img/icon-cart.png')}}" alt="Shopping Basket">
				<p>£{{amount()}}</p>{{itemCount()}} Items
				<div class="cart_detail">
					<div class="box">
						<p>Basket Summary (0)</p> 
						<div class="items">
							<div class="flex cart">
							</div>
						</div>
						<div class="flex cart">
							<div class="c_40 bold">TOTAL</div>
							<div class="c_60 bold right">£0.00 (inc VAT)</div>
							<div class="c_40"><span class="compare-badge"></span></div>
							<div class="c_60"><a href="/checkout" title="Checkout" class="btn red_btn">Checkout</a></div>
						</div>
					</div>
				</div> 
			</div>
			<p class="call"><img src="{{asset('img
				/icon-telephone.svg')}}" alt="Telephone">Call <span class="rTapNumber53432" style="visibility: visible;">01442781148</span><a href="mailto:admin@hollysecuritydoors.co.uk" title="Email Holly Security Doors"><img src="https://www.Holly Securitydoors.co.uk/images/icon-email.svg" alt="Email"></a></p>
			<p class="email">or email <a href="mailto:admin@hollysecuritydoors.co.uk" title="Email Holly Security Doors">admin@hollysecuritydoors.co.uk</a></p>
			</div>
		</div>
	</div>
	<div id="menu_wrap">
		<div class="menu">
			<div id="search_box" style="width: 1349px; height: 82px;">
				<form name="search" method="post" action=""></form>
			</div>
			<ul class="flex">
				<li><a href="{{route('showroom')}}" title="Holly Security Doors Showroom">Showroom<span>&nbsp;</span></a></li>
				<li><a href="{{route('about-us')}}" title="About Holly Security Doors">About us<span>&nbsp;</span></a></li>
				<li><a href="{{route('service')}}" title="Holly Security Doors Service">Service<span>&nbsp;</span></a></li>
				<li><a href="{{route('reviews')}}" title="Holly Security Doors Reviews">Reviews<span>&nbsp;</span></a></li>
				<li><a href="{{route('contact-us')}}" title="Contact Holly Security Doors">Contact Us<span>&nbsp;</span></a></li>
				<li><a href="{{route('faq')}}" title="Holly Security Doors FAQ">FAQ<span>&nbsp;</span></a></li>
				<li><a href="{{route('blog')}}" title="Holly Security Doors Blog">Blog<span>&nbsp;</span></a></li>
				<li class="offers"><a href="{{route('special_offers')}}" title="Holly Security Doors Special Offers">Special Offers<span>&nbsp;</span></a>
				</li>
				<li><span>Search</span></li>
			</ul>
		</div>
	</div>
	<div id="navigation_wrap">
		<div class="nav">
			<ul class="flex">
				@foreach(allList() as $item)
				<li><a href="{{route($item->name,$item->id)}}" title="{{$item->name}}" data-link="" class="cat">{{$item->name}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
	<div id="msg_wrap">
		<div class="flex">
			<div class="c_33">
				<div class="inner"><img src="{{asset('img/thumb.png')}}"> <span>Free Delivery in 3-7 Days*</span> (Orders above £750)
				</div>
			</div>
			<div class="c_33">
				<div class="inner"><img src="{{asset('img/thumb_2.png')}}"><span>10 year Guarantee</span> Against Manufacturing Defects
				</div>
			</div>
			<div class="c_33">
				<div class="inner"><img src="{{asset('img/thumb_3.png')}}"><span>100% Secure Shopping</span> Buy With Confidence
				</div>
			</div>
		</div>
	</div>
</div>