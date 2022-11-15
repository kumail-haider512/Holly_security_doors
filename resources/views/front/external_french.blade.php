@extends('layouts.master')
@section('title','External French Doors: UPVC, Aluminium & Wood French Windows')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div>
			<div id="breadcrumbs">
				<ul>
					<li>
					<a href="{{route('home')}}" title="Holly Security Doors Home">
					Home</a></li>
					<li><span>〉</span></li>
					<li>
					<a href="{{route('External French Doors')}}" title="External French Doors">
					External French Doors</a></li>
				</ul>
			</div>
			<h6 class="subtitle"><span>All External French Doors</span></h6>
			<div class="flex">
				<div class="c_25 filter_wrap">
					<div class="filters">
						<form name="filter" method="post" action="" id="sanitize">
						<p class="heading reverse no_icon">Price</p>
						<div class="price_wrapper">
							<div class="price_slider" data-range_min="1559" data-range_max="3499" data-cur_min="1559" data-cur_max="3499">
								<div class="highlightPanel">
									
								</div>
								<div class="bar" style="left: 0px; width: 305px;">
									
								</div>
								<div class="left_button" tabindex="0" style="left: 0px;">
									
								</div>
								<div class="right_button" tabindex="0" style="left: 285px;">
									
								</div>
							</div>
							<div class="price_from price_box">£1559.00
							</div>to
							<div class="price_to price_box">£3499.00
							</div>
							<input name="price_from" type="hidden" value="1559">
							<input name="price_to" type="hidden" value="3499">
							<a href="#" title="Filter Results" class="btn filter_btn">Filter</a>
						</div>
						</form>
					</div>
				</div>
				<div class="c_75">
					<div class="flex products">
						@foreach($subs as $sub)
						<div class="c_33">
							<div class="inner">
								<a href="{{route('detail',$sub->id)}}" class="single_img">
								<img src="{{asset($sub->image)}}" class="Sirv sirv-image-loaded" referrerpolicy="no-referrer-when-downgrade" style="max-width: 410px;" alt="Climadoor Upvc Bifold Doors - White High Security"></a>
								<div class="descriptive">
									<h3 class="min">
									<a href="#" title="Climadoor Upvc Bifold Doors - White High Security"><span itemprop="name">{{$sub->name}}</span></a>
									</h3>
									<p class="from">From: £{{$sub->price}}</p>
									<a href="{{route('detail',$sub->id)}}" class="btn red">Find Out More</a>
								</div>
							</div>
						</div>
						@endforeach
 					</div>
				</div>
			</div>
			<div class="summary">
				<h6 class="subtitle"><span>The Holly Security Doors External French Doors Range</span></h6>
				<p><span>A French patio door set, unlike <a href="#">bifold or sliding door</a>s, opens like a traditional door, making them ideal for more traditional or period properties. That's not to say they don't suit a more modern approach though! Our external French doors are sure to suit any property.</span></p>
				<p>Our luxurious double glazed&nbsp;<a href="#">ClimaDoor high performance 54mm solid Oak French doors</a> are truly striking and will instantly add value and appeal to any property. These solid oak wood exterior French doors are offered fully finished only with superb thermal performance. You have the option to choose either full height glass doors, to get the most light into your home, or an 8 lite (Georgian bar) option, giving you a more traditional look. You’ll find our doors affordable and the list price includes VAT. Don't let the low cost fool you. All our oak patio doors, hardwood French doors, and white <a href="#">patio doors</a> come with a <a href="#">10-year manufacturer’s guarantee</a> against manufacturing defects.</p>
				<p><img style="display: block; margin-left: auto; margin-right: auto;" title="choice" src="img/icon-configure.png" alt="choice" width="61" height="57"></p>
				<h2>Choose the Size, Colour Options, Materials &amp; Finish of Your French Doors</h2>
				<p>Our timber French door range provides a selection of exterior patio doors to suit all budgets. Whether your tastes are modern or more traditional, we've got the wooden French doors for you. The modular <a href="#">NUVU external french doors</a> collection is available in a wide range of styles and sizes to fit openings from 1200 (4ft) wide up to 3000m (10ft). It gives you great value for money with no compromise on quality or performance. You can select from a range of different sidelight sizes to fit your opening with a pair of exterior French doors of your choice. Take a look at our <a href="#">Measuring French Doors Guide</a> for more info.</p>
				<h3>Timber French Doors</h3>
				<p class="ql-align-center">We specialise in timber French windows which can be easily finished to your chosen look whether you choose solid oak or softwood. All designs in our wooden French doors range are double glazed. Choose from high-quality unfinished oak veneer, white primed or prefinished exterior doors. You can select your own paint or stain, or install a prefinished door straight away. We have a range of colours and finishes available.&nbsp;</p>
				<h3 class="ql-align-center">Aluminium French Doors</h3>
				<p class="ql-align-center">We have recently updated our offering to include a range of stylish <a href="#">aluminium external French windows</a>. These striking external doors are lightweight and strong and are available in a choice of white or anthracite grey. Thermally broken aluminium and high-quality double glazing help keep heat loss down too!</p>
				<h3 class="ql-align-center">uPVC French Doors</h3>
				<p class="ql-align-center">Our exterior French doors range now also includes <a href="#s">uPVC French doors</a>. Also available in a range of colours and with smart, slimline frames, our uPVC doors will suit any property.</p>
				<p><img style="display: block; margin-left: auto; margin-right: auto;" title="security" src="img/thumb_5.png" alt="security" width="61" height="57"></p>
				<h2>French Windows Security</h2>
				<p>The <a href="#">security of your exterior French doors</a> is vital, so that’s why we provide multi-point locking systems to keep your home safe. Double glazing is a must and what’s more, each glazed panel is made of toughened safety glass for both security and thermal efficiency.&nbsp;<span> Many of our external French doors are also Part Q compliant for enhanced security, like our <a href="#">Climadoor Grey Aluminum Bifold Doors</a>.</span></p>
				<p><img style="display: block; margin-left: auto; margin-right: auto;" title="thermal efficiency" src="img/thumb_6.png" alt="thermal efficiency" width="61" height="57"></p>
				<h2>Oak French Door Thermal Efficiency</h2>
				<p><span>Like our stylish folding doors, all our external wooden French doors sets are fitted with energy-saving double glazed toughened units for maximum thermal efficiency. This means your <a href="#">wooden patio doors</a> are draught-resistant so your home will feel cosy no matter the weather. The NUVU timber French doors range offers a low U-value of 1.6W/m2K, with the ClimaDoor oak French doors collection offering a specification to achieve an even lower U-value of 1.5W/m²K. This exceeds current Building Regulation requirements. Your energy-efficient new doors will help reduce your utility bills even further.&nbsp;</span></p>
				<h3 class="ql-align-center">uPVC and Aluminium French Door Thermal Efficiency</h3>
				<p class="ql-align-center">As with our wooden French doors, our aluminium and uPVC French doors have low u values and excellent thermal efficiency. uPVC is an excellent insulator already, and our aluminum doors incorporate a thermal break to prevent heat loss. Combine these high-quality materials with argon-filled double glazing and you'll soon see the savings on your bills!</p>
				<h2>Exterior French Door Furniture</h2>
				<p>Like all our doors, our external French door sets are supplied with hardware, including fittings, door handles, hinges, latches, door locks and accessories.</p>
				<p>Wooden French doors aren’t just for the exterior, don’t forget to check out our oak&nbsp;<a href="#">internal French doors</a>&nbsp;to encourage open plan living (internal glazed doors spread light throughout your home). Or take a look at our <a href="#">external bi fold doors</a> if you really want to bring the outdoors indoors and open up your home and garden. Complete the look by shopping our selections of stylish <a href="#" target="_blank">front doors</a> and <a href="#" target="_blank">back doors</a> to really add kerb appeal and value to your home.</p>
				<p>Let plenty of natural light into your home - buy your new wood French doors today!</p>
			</div>
			<div id="article_wrap">
				<h6 class="subtitle"><span>Help, Tips &amp; Advice</span></h6>
				<div class="flex">
					<div class="c_25">
						<div class="inner">
							<a href="#" title="View French Door FAQs: A Need to Know Guide"><img src="" alt="French Door FAQs: A Need to Know Guide Image"></a>
							<h4 style="height: 43.2px;"><a href="#" title="View French Door FAQs: A Need to Know Guide">French Door FAQs: A Need to Know Guide</a></h4>
							<p>
							Whilst almost all of us will be aware of French doors&nbsp;and might even have them installed in our homes,&nbsp;few of us actually understand them. This is important because&nbsp;to get the most o...</p><a href="#" title="View French Door FAQs: A Need to Know Guide" class="btn">Read More</a>
						</div>
					</div>
					<div class="c_25">
						<div class="inner">
							<a href="#" title="View French Door FAQs: A Need to Know Guide"><img src="" alt="French Door FAQs: A Need to Know Guide Image"></a>
							<h4 style="height: 43.2px;"><a href="#" title="View French Door FAQs: A Need to Know Guide">French Door FAQs: A Need to Know Guide</a></h4>
							<p>
							Whilst almost all of us will be aware of French doors&nbsp;and might even have them installed in our homes,&nbsp;few of us actually understand them. This is important because&nbsp;to get the most o...</p><a href="#" title="View French Door FAQs: A Need to Know Guide" class="btn">Read More</a>
						</div>
					</div>
					<div class="c_25">
						<div class="inner">
							<a href="#" title="View French Door FAQs: A Need to Know Guide"><img src="" alt="French Door FAQs: A Need to Know Guide Image"></a>
							<h4 style="height: 43.2px;"><a href="#" title="View French Door FAQs: A Need to Know Guide">French Door FAQs: A Need to Know Guide</a></h4>
							<p>
							Whilst almost all of us will be aware of French doors&nbsp;and might even have them installed in our homes,&nbsp;few of us actually understand them. This is important because&nbsp;to get the most o...</p><a href="#" title="View French Door FAQs: A Need to Know Guide" class="btn">Read More</a>
						</div>
					</div>
					<div class="c_25">
						<div class="inner">
							<a href="#" title="View French Door FAQs: A Need to Know Guide"><img src="" alt="French Door FAQs: A Need to Know Guide Image"></a>
							<h4 style="height: 43.2px;"><a href="#" title="View French Door FAQs: A Need to Know Guide">French Door FAQs: A Need to Know Guide</a></h4>
							<p>
							Whilst almost all of us will be aware of French doors&nbsp;and might even have them installed in our homes,&nbsp;few of us actually understand them. This is important because&nbsp;to get the most o...</p><a href="#" title="View French Door FAQs: A Need to Know Guide" class="btn">Read More</a>
						</div>
					</div>
					<div class="c_25">
						<div class="inner">
							<a href="#" title="View French Door FAQs: A Need to Know Guide"><img src="" alt="French Door FAQs: A Need to Know Guide Image"></a>
							<h4 style="height: 43.2px;"><a href="#" title="View French Door FAQs: A Need to Know Guide">French Door FAQs: A Need to Know Guide</a></h4>
							<p>
							Whilst almost all of us will be aware of French doors&nbsp;and might even have them installed in our homes,&nbsp;few of us actually understand them. This is important because&nbsp;to get the most o...</p><a href="#" title="View French Door FAQs: A Need to Know Guide" class="btn">Read More</a>
						</div>
					</div>
					<div class="c_25">
						<div class="inner">
							<a href="#" title="View French Door FAQs: A Need to Know Guide"><img src="" alt="French Door FAQs: A Need to Know Guide Image"></a>
							<h4 style="height: 43.2px;"><a href="#" title="View French Door FAQs: A Need to Know Guide">French Door FAQs: A Need to Know Guide</a></h4>
							<p>
							Whilst almost all of us will be aware of French doors&nbsp;and might even have them installed in our homes,&nbsp;few of us actually understand them. This is important because&nbsp;to get the most o...</p><a href="#" title="View French Door FAQs: A Need to Know Guide" class="btn">Read More</a>
						</div>
					</div>
					<div class="c_25">
						<div class="inner">
							<a href="#" title="View French Door FAQs: A Need to Know Guide"><img src="" alt="French Door FAQs: A Need to Know Guide Image"></a>
							<h4 style="height: 43.2px;"><a href="#" title="View French Door FAQs: A Need to Know Guide">French Door FAQs: A Need to Know Guide</a></h4>
							<p>
							Whilst almost all of us will be aware of French doors&nbsp;and might even have them installed in our homes,&nbsp;few of us actually understand them. This is important because&nbsp;to get the most o...</p><a href="#" title="View French Door FAQs: A Need to Know Guide" class="btn">Read More</a>
						</div>
					</div>
					<div class="c_25">
						<div class="inner">
							<a href="#" title="View French Door FAQs: A Need to Know Guide"><img src="" alt="French Door FAQs: A Need to Know Guide Image"></a>
							<h4 style="height: 43.2px;"><a href="#" title="View French Door FAQs: A Need to Know Guide">French Door FAQs: A Need to Know Guide</a></h4>
							<p>
							Whilst almost all of us will be aware of French doors&nbsp;and might even have them installed in our homes,&nbsp;few of us actually understand them. This is important because&nbsp;to get the most o...</p><a href="#" title="View French Door FAQs: A Need to Know Guide" class="btn">Read More</a>
						</div>
					</div>
				</div>
			</div> 
		</div> 	
	</div>
</div>
@endsection