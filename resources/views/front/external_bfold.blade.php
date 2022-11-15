@extends('layouts.master')
@section('title','External Bi-fold Doors: Folding & Sliding Glass Patio Doors')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div>
			<div id="breadcrumbs">
				<ul>
					<li>
					<a href="{{route('home')}}" title="Holly Security Doors Home">
					Home</a></li>
					<li>
						<span>〉</span></li>
					<li>
						<a href="{{route('External Bifold Doors')}}" title="External Bifold Doors: Folding Glass Patio Doors">
					External Bifold Doors: Folding Glass Patio Doors</a>
					</li>
				</ul>
			</div>
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
				<h6 class="subtitle"><span>What are External Bifold Doors</span></h6>
				<p class="MsoNormal">Transform your living space with a set of high-quality exterior bifold doors. Bifold doors are doors that fold in a concertina style rather than opening outwards or inwards on standard hinges (like French doors). This means that they fold back on themselves to allow for optimum natural light and unobstructed views. They are also known as folding patio doors, bi-folding doors, or folding sliding doors.</p>
				<p class="MsoNormal">External bifold doors are folding sliding doors that open onto an outdoor space, rather than linking two rooms inside your home (we have a range of oak internal doors available for that too!). This means that they need to be sturdy, durable, versatile and weatherproof, not to mention stylish. And with plenty of styles and colour options to choose from, our exterior folding doors will be a stunning addition to any home (and garden!).</p>
				<h2 class="MsoNormal">Why Choose External Bifold Doors?</h2>
				<p class="MsoNormal">From experience, we know there’s no better way to enjoy your garden, patio, conservatory or orangery all year-round than by installing a gorgeous set of stylish external <a href="#">bi fold doors</a>. The full-height, clear glazed panels mean that even in the depths of winter you can enjoy plenty of natural light. Watch the view of your garden change through the seasons. The folding, sliding motion allows you to open your space completely during the summer months.</p>
				<p><img style="display: block; margin-left: auto; margin-right: auto;" title="choice" src="{{asset('img/icon-configure.png')}}" alt="choice" width="61" height="57"></p>
				<h2>External Bifold Doors - The Choice Is Yours</h2>
				<p class="MsoNormal">We are incredibly proud of our selection of contemporary external folding doors. From our <a title="Climadoor Bifold Doors" href="#-q">Climadoor Aluminium Folding Doors</a> to <a href="#">LPD folding patio doors</a>, we have everything to suit your needs. Whether it’s style, design, or price that’s your key consideration, we've got the doors for you. Our external bi fold doors are durable, and suitable for extensions, refurbishments, and new-build homes.</p>
				<p class="MsoNormal">Our high-quality external folding doors not only meet, but exceed, the requirements of current building regulations. We’re a timber door specialist, so you can expect high-quality joinery and beautiful, grained wood. With the proper treatment and maintenance, your folding patio doors will last you for many years to come.</p>
				<p class="MsoNormal">We also stock aluminium bi-fold doors which offer a modern, contemporary look combined with the ultimate in lightweight strength and thermal efficiency. If you’re looking for something <a href="#">bespoke</a>, we can work on custom, made-to-measure designs for you too. We'll offer support and advice before, during and after installation of your external folding glass doors, to ensure that you get the best out of them.</p>
				<p></p>
				<p class="MsoNormal">All our external bi folding doors are available in a range of sizes, finishes and colour options, allowing you complete control over the final look of your doors. Choose the frame width and height, fully finished or unfinished, door thickness and even the opening pattern to suit you and your property. Select from hardwoods like solid engineered oak, oak veneer and pine, or opt for lightweight aluminium.</p>
				<p><img style="display: block; margin-left: auto; margin-right: auto;" title="security" src="{{asset('img/thumb_5.png')}}" alt="security" width="61" height="57"></p>
				<h2>External Bi-fold Door Security</h2>
				<p class="MsoNormal">It's <a href="#">vital to secure your external entryways properly</a>, and your security is paramount for us. This is why all our aluminium and oak external folding sliding doors come fitted with multi-point locking systems as standard. They also have hidden in-line tracking systems to keep your home fully protected against intruders.</p>
				<p><img style="display: block; margin-left: auto; margin-right: auto;" title="thermal efficiency" src="{{asset('img/thumb_6.png')}}" alt="thermal efficiency" width="61" height="57"></p>
				<h2>Energy Efficient Bi fold Patio Doors</h2>
				<p class="MsoNormal">We work hard to ensure all that our bi fold patio doors, like all our products, have low U-values. This means they’re good at keeping the heat inside your home (saving you money on those heating bills!). All our external folding and sliding patio doors fully satisfy Part L of the building regulations, so you can install them with the confidence that your home will stay cosy. You should ensure you have toughened double glazing for optimum safety and thermal and energy efficiency. <a href="#" target="_blank">Read our folding doors U value and thermal efficiency guide here</a>.</p>
				<p><img style="display: block; margin-left: auto; margin-right: auto;" title="weather resistance" src="{{asset('img/icon-weather.png')}}" alt="weather resistance" width="61" height="57"></p>
				<h2>Weather Resistant External Glass Sliding Doors</h2>
				<p class="MsoNormal">All our exterior bifold sliding doors have resilient weather seals to keep out cold, rain and snow. Our glass external folding doors are weather tested to strict standards to check they’re up to scratch. So, whatever the great British weather throws at you, your external bifold doors will be ready!</p>
				<p><img style="display: block; margin-left: auto; margin-right: auto;" title="fittings" src="{{asset('img/icon-fitting.png')}}" alt="fittings" width="61" height="57"></p>
				<h2>Hardware and Fittings for Your Sliding Patio Doors</h2>
				<p class="MsoNormal">Hardware, fittings, accessories and handles are supplied with our external bi-fold doors. Check the specification of each product to see what’s included. We’ll let you know if you can expect stainless steel, aluminium, silver effect or chrome effect. Take a look at our information centre for tips on bifold door installation, how to paint your folding sliding doors and more.</p>
				<p></p>
				<p class="MsoNormal">We also stock a range of luxury oak <a href="#">internal bifold doors</a> to help your interior feel bright and spacious. Take a look at our internal and <a href="#">external French doors</a> too.</p>
				<div id="_mcePaste" class="mcePaste" style="position: absolute; left: -10000px; top: 262px; width: 1px; height: 1px; overflow: hidden;">
				</div> 
			</div>
			<div class="back_up">
				<img src="/images/icon-up.svg" alt="Up">
			</div>
		</div> 
		<div id="article_wrap">
			<h6 class="subtitle"><span>Help, Tips &amp; Advice</span></h6>
			<div class="flex">
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Bifold Doors: Your Frequently Asked Questions – Answered!">
						<img src="{{asset('img/read.png')}}" class="Sirv" alt="Bifold Doors: Your Frequently Asked Questions – Answered!" referrerpolicy="no-referrer-when-downgrade"></a><h4 style="height: 64.8px;"><a href="#" title="View Bifold Doors: Your Frequently Asked Questions – Answered!">Bifold Doors: Your Frequently Asked Questions – Answered!</a></h4>
						<p>If you're thinking of buying a set of bifold doors, no doubt you'll have a few questions before you make your purchase. Here we'll be addressing all of the most common door FAQs that arise when it com...</p><a href="#" title="View Bifold Doors: Your Frequently Asked Questions – Answered!" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="" title="View What Are Bifold Doors?">
						<img src="{{asset('img/read1.png')}}" class="Sirv" alt="What Are Bifold Doors?" referrerpolicy="no-referrer-when-downgrade"></a><h4 style="height: 64.8px;"><a href="#" title="View What Are Bifold Doors?">What Are Bifold Doors?</a></h4>
						<p>Bifold doorsdefinition is doors that slide open,made from a series of panels that fold up against the wall like a concertina. Although conventional, single leaf doors are common in most mo...</p><a href="#" title="View What Are Bifold Doors?" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Installing External Bifold Doors">
						<img src="{{asset('img/read2.png')}}" class="Sirv" alt="Installing External Bifold Doors" referrerpolicy="no-referrer-when-downgrade"></a><h4 style="height: 64.8px;"><a href="#" title="View Installing External Bifold Doors">Installing External Bifold Doors</a></h4>
						<p>There are a wide range ofexternal bifold doorsavailable and any of them will bring a great deal of character to your home. Most enticingly of all,it's deceptively easy to install bif...</p><a href="#" title="View Installing External Bifold Doors" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Bifold Door Sizing">
						<img src="{{asset('img/read3.png')}}" class="Sirv" alt="Bifold Door Sizing" referrerpolicy="no-referrer-when-downgrade"></a><h4 style="height: 64.8px;"><a href="#" title="View Bifold Door Sizing">Bifold Door Sizing</a></h4>
						<p>Whilstbifold doorsare incredibly flexible, this is one instance where the one-size-fits-all mantra simply doesn't fly. Bi-fold doors are rarely a bad idea when it comes to sprucing up the ...</p><a href="#" title="View Bifold Door Sizing" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Are External Bifold Doors Secure?  All About Bifold Safety And Locking Systems">
						<img src="{{asset('img/read4.png')}}" class="Sirv" alt="Are External Bifold Doors Secure?  All About Bifold Safety And Locking Systems" referrerpolicy="no-referrer-when-downgrade"></a><h4 style="height: 64.8px;"><a href="#" title="View Are External Bifold Doors Secure?  All About Bifold Safety And Locking Systems">Are External Bifold Doors Secure? All About Bifold Safety And Locking Systems</a></h4>
						<p>When it comes to your home, safety is obviously going to be one of your most significant concerns, and one of the primary reasons homeowners might be put off installing a set of external bifold doors ...</p><a href="#" title="View Are External Bifold Doors Secure?  All About Bifold Safety And Locking Systems" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View External Bifold Doors: Withstanding The Elements">
						<img src="{{asset('img/read5.png')}}" class="Sirv" alt="External Bifold Doors: Withstanding The Elements" referrerpolicy="no-referrer-when-downgrade"></a><h4 style="height: 64.8px;"><a href="#" title="View External Bifold Doors: Withstanding The Elements">External Bifold Doors: Withstanding The Elements</a></h4>
						<p>Whilstexternal bifold doorsare a wonderful way to bring extra light and warmth 	into your home, many might worry that they might not be able to stand up to the elements as well as a more...</p><a href="#" title="View External Bifold Doors: Withstanding The Elements" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Installing External Bifold Doors">
						<img src="{{asset('img/read6.png')}}" class="Sirv" alt="Installing External Bifold Doors" referrerpolicy="no-referrer-when-downgrade"></a><h4 style="height: 64.8px;"><a href="#" title="View Installing External Bifold Doors">Installing External Bifold Doors</a></h4>
						<p>There are a wide range ofexternal bifold doorsavailable and any of them will bring a great deal of character to your home. Most enticingly of all,it's deceptively easy to install bif...</p><a href="#" title="View Installing External Bifold Doors" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Installing External Bifold Doors">
						<img src="{{asset('img/read7.png')}}" class="Sirv" alt="Installing External Bifold Doors" referrerpolicy="no-referrer-when-downgrade"></a><h4 style="height: 64.8px;"><a href="#" title="View Installing External Bifold Doors">Installing External Bifold Doors</a></h4>
						<p>There are a wide range ofexternal bifold doorsavailable and any of them will bring a great deal of character to your home. Most enticingly of all,it's deceptively easy to install bif...</p><a href="#" title="View Installing External Bifold Doors" class="btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
