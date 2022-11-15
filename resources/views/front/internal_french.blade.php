@extends('layouts.master')
@section('title','Internal French Doors | Glazed Interior Double Doors & Frames')
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
				<a href="{{route('Internal French Doors')}}" title="Internal French Doors | Glazed Interior Double Doors & Frames">Internal French Doors</a></li>
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
		</div>
		<div class="summary">
			<h6 class="subtitle"><span>The Holly Security Doors Internal French Doors Range</span></h6>
			<p>If you thought French doors were just for the patio, think again! A French door (also known as a French window) is simply a pair of hinged double doors that open outwards. This allows you full access to the whole width of the door opening. French doors originate from 17th century France where they were first introduced as floor-length windows to allow access to balconies. Today, their light-enhancing qualities make them a popular choice for both the interior and exterior. Our interior glass double doors are ideal for the living room, dining room, study, kitchen... basically anywhere in your home! What's more, they all feature the finest materials and most stunning designs. And all French door pairs, <a href="#">like our Empress Oak Doors</a>,&nbsp;are available online at great prices!</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="glazing" src="img/icon-glass.png" alt="glazing" width="61" height="57"></p>
			<h2>French Internal Glazed Double Doors</h2>
			<p>Our internal glazed French doors allow extra light into your room and are fitted as standard with toughened glass. This ensures they meet safety standards and provide peace of mind. Internal French door pairs are available with clear and obscure glass panels in a variety of moulded and panelled designs. Clear glass is best for creating a bright living space (ideal for the living room or dining room) but you might prefer the privacy of frosted glass if you opt for a French door in the bathroom or bedroom. Bevelled glass is also available on selected designs within our internal wooden French doors range.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="choice" src="img/icon-configure.png" alt="choice" width="61" height="57"></p>
			<h2>Choice of Materials, Colours &amp; Styles</h2>
			<p>Our glazed internal double door sets are available in a wide range of styles, materials and colours. The choice is yours with solid wood room dividers&nbsp;available in oak, hardwood or white primed. We also offer folding French double doors to suit wider door openings. Choose from gorgeous grained oak or internal white primed doors that you can finish with a high gloss.</p>
			<p>We have&nbsp;a variety of ranges of oak internal French doors, such as the&nbsp;<a href="#">Oslo</a>, the Shaker&nbsp;and the&nbsp;<a href="#">Traditional</a>.&nbsp;The Oslo is prefinished, the Traditional is supplied unfinished and the Shaker is available both unfinished and prefinished. Where untreated, ensure you&nbsp;finish your&nbsp;timber doors with an&nbsp;appropriate paint or stain. You can choose the right finish for your internal French oak doors to match current flooring, furniture or worktops. Some basic woodcare will ensure your oak internal double doors remain in tip top condition even when exposed to damp conditions or the dry heat of radiators. You'll also have a choice of door furniture to provide the perfect finishing touches. Choose from door handles, hinges and more.</p>
			<p>As well as traditional glazed internal French doors, we offer a&nbsp;<a href="#">frenchfold</a>&nbsp;design (also known as a freefold system). This combines the benefits of both French and&nbsp;<a href="#">bifold doors</a>. Their central opening access works like normal and is accompanied by sidelights that can be folded back to completely open up the space when you don't want a room partition. You'll get the flow between rooms just like you would with a roomfold system. This option can work well for those of you who want to enjoy open-plan living!</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="sizing" src="img/icon-measure.png" alt="sizing" width="61" height="57"></p>
			<h2>Interior French Door Sizing</h2>
			<p>We stock a variety of sizes of internal French interior doors pairs and other configurations (2-4 doors) to cater for various door openings.</p>
			<p>Here's a handy guide to help you find standard internal French doors sizes quickly:</p>
			<ul>
			<li>W4 fits&nbsp;a 4-foot-wide opening</li>
			</ul>
			<ul>
			<li>W6 fits a 6-foot-wide opening&nbsp;</li>
			</ul>
			<ul>
			<li>W8&nbsp;fits an 8-foot-wide opening</li>
			</ul>
			<p>If you've got a larger door opening, why not pair your interior <a href="#">French doors with sidelights</a> to really allow light to filter through. We have a range of side panels and sidelights available that perfectly complement our internal glazed French doors.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="fittings" src="img/icon-fitting.png" alt="fittings" width="61" height="57"></p>
			<h2>Internal French Door Fittings &amp; Accessories</h2>
			<p>All our internal French doors come supplied with frame pack, door leaves, and installation instructions. Hardware pack is not included so you can choose the handles, locks and fittings to match the rest of your windows and doors. Installation can be done yourself or by a professional joiner. If you'd like to give it a go,&nbsp;put on your workwear, grab your tools and check out our&nbsp;<a href="#">internal french door fitting guide</a>. &nbsp;</p>
			<p>If you love the feeling of space in your home, why not check out our range of&nbsp;<a href="#">external french doors</a>&nbsp;and frames to help you enjoy the best view of your garden from the comfort of your home? Or give your interior a facelift with some stylish new <a href="#" target="_blank">internal doors</a>? Your new designer doors are waiting for you! Contact us on 01332 895734 or buy online today.</p> 
		</div>
		<div class="back_up"><img src="/images/icon-up.png" alt="Up">
		</div>
		<div id="article_wrap">
			<h6 class="subtitle"><span>Help, Tips &amp; Advice</span></h6>
			<div class="flex">
				<div class="c_25">
					<div class="inner">
						<a href="#!">
						<img src="img/Bifold-Doors---Your-Questions-Answered.webp?canvas.width=280&amp;canvas.height=150&amp;w=280&amp;scale.option=fill" class="Sirv" alt="Bifold Doors: Your Frequently Asked Questions – Answered!" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Bifold Doors: Your Frequently Asked Questions – Answered!">Bifold Doors: Your Frequently Asked Questions – Answered!</a></h4>
						<p>If you're thinking of buying a set of bifold doors, no doubt you'll have a few questions before you make your purchase. Here we'll be addressing all of the most common door FAQs that arise when it com...</p><a href="#" title="View Bifold Doors: Your Frequently Asked Questions – Answered!" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#">
						<img src="img/How-To-Choose-The-Right-Internal-Bifold-Doors.webp?canvas.width=280&amp;canvas.height=150&amp;w=280&amp;scale.option=fill" class="Sirv" alt="How To Choose The Right Internal Bifold Doors" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View How To Choose The Right Internal Bifold Doors">How To Choose The Right Internal Bifold Doors</a></h4>
						<p>If you're looking for a way to liven up your homestead that will not only look striking, but will open up your space to a number of fresh possibilities, internal bifold doors are a wonderful option. H...</p><a href="#" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#">
						<img src="img/Installing-Internal-Bifold-Doors.webp?canvas.width=280&amp;canvas.height=150&amp;w=280&amp;scale.option=fill" class="Sirv" alt="Installing Internal Bifold Doors" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Installing Internal Bifold Doors">Installing Internal Bifold Doors</a></h4>
						<p>Most houses built in the latter half of the 20th century will undoubtedly have been built with cumbersome sliding doors, but that doesn't necessarily mean you have to be stuck with them. Why not, inst...</p><a href="#" title="View Installing Internal Bifold Doors" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View What Are Bifold Doors?">
						<img src="img/What-Are-Bifold-Doors.webp?canvas.width=280&amp;canvas.height=150&amp;w=280&amp;scale.option=fill" class="Sirv" alt="What Are Bifold Doors?" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View What Are Bifold Doors?">What Are Bifold Doors?</a></h4>
						<p>Bifold doors&nbsp;definition is doors that slide open,&nbsp;made from a series of panels that fold up against the wall like a concertina. Although conventional, single leaf doors are common in most mo...</p><a href="#" title="View What Are Bifold Doors?" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View All About Internal Bifold Door Handles">
						<img src="img/thumb.webp?canvas.width=280&amp;canvas.height=150&amp;w=280&amp;scale.option=fill" class="Sirv" alt="All About Internal Bifold Door Handles" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View All About Internal Bifold Door Handles">All About Internal Bifold Door Handles</a></h4>
						<p>If you've made the decision to liven up the interior of your home with a set of&nbsp;internal bifold doors, you might also want to consider accessorising to make sure they are perfectly suited to your...</p><a href="#" title="View All About Internal Bifold Door Handles" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Internal Bifold Door Glazing">
						<img src="img/Bifold-9-glazing-internal.webp?canvas.width=280&amp;canvas.height=150&amp;w=280&amp;scale.option=fill" class="Sirv" alt="Internal Bifold Door Glazing" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Internal Bifold Door Glazing">Internal Bifold Door Glazing</a></h4>
						<p>Now that you've (presumably) decided to install&nbsp;internal bifold doors&nbsp;in your home, thereby increasing not only the financial value of your home&nbsp;but its aesthetic value as well, there a...</p><a href="#" title="View Internal Bifold Door Glazing" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#">
						<img src="img/Bifold-10-track.webp?canvas.width=280&amp;canvas.height=150&amp;w=280&amp;scale.option=fill" class="Sirv" alt="All About Internal Bifold Door Tracks" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View All About Internal Bifold Door Tracks">All About Internal Bifold Door Tracks</a></h4>
						<p>Internal bifold doors&nbsp;are a great option for wardrobes as you can open them up for more access, they take up minimal space, and they could give your room a pleasant, finished look. Whilst you mig...</p><a href="#" title="View All About Internal Bifold Door Tracks" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Bifold Door Problems And How To Fix Them">
						<img src="img/fix_bifold_doors[1].webp?canvas.width=280&amp;canvas.height=150&amp;w=280&amp;scale.option=fill" class="Sirv" alt="Bifold Door Problems And How To Fix Them" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Bifold Door Problems And How To Fix Them">Bifold Door Problems And How To Fix Them</a></h4>
						<p>
						Bifold doors are an excellent way of creating the largest possible opening in the smallest possible space. &nbsp;In their smallest form, they’re a popular choice for airing cupboards and pantr...</p><a href="#" title="View Bifold Door Problems And How To Fix Them" class="btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
