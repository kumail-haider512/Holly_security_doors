@extends('layouts.master')
@section('title','External Sliding Glass Doors | Buy Sliding Patio Doors Online')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div>
			<div id="breadcrumbs">
				<ul>
					<li>
						<a href="/" title="Holly Security Doors Home" itemprop="item">
						Home</a></li>
						<li><span>〉</span>
					</li>
					<li>
						<a href="{{route('Sliding Doors')}}" title="Sliding Doors">Sliding Doors</a>
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
		</div>
		<div class="summary">
			<h6 class="subtitle"><span>The Holly Security Doors Sliding Doors Range</span></h6>
			<h2>What Are Sliding Doors?</h2>
			<p>Sliding doors are just that, doors which sit on a track within the opening and slide open or closed. Rather than folding back on themselves like a set of bifold doors, or opening outwards like French doors, they slide horizontally along their tracks. This makes them ideal for balconies and smaller gardens, or for rooms where there is not much floor space.</p>
			<p>Our smooth-sliding external glass doors are the perfect marriage of door and window, creating a seamless transition between indoors and outdoors when open, and allowing for an almost uninterrupted view of your outdoor space when closed.</p>
			<h2>High-Quality Sliding Patio Doors</h2>
			<p>We work with some of the world’s best door manufacturers and the highest-quality materials, so when you choose to buy from Holly Security you know you’re getting lasting performance as well as gorgeous design and fantastic service. All our doors come with a 10-year guarantee and excellent thermal efficiency to satisfy Part L of the Building Regulations. Not to mention, they look great in any home!</p>
			<h2>What Sizes Are Sliding Doors?</h2>
			<p>As with our bifold doors, our sliding patio door systems can be tailored to virtually any opening. They are available in a range of sizes and panel configurations that will fit all standard-sized openings. But don’t worry if you’ve got a larger or awkwardly-sized opening – we offer a bespoke made to measure service designed to ensure you get the doors you’ve been looking for!</p>
			<h2>Twin-track and Triple-Track Patio Doors</h2>
			<p>Depending on the size of the opening and number of panels required, our exterior sliding patio door systems are available with either two or three tracks.</p>
			<p>Twin-track sliding doors allow two or more doors to open in opposite directions. These are generally best for 2-3 panel sliding door systems. The doors can be configured so that each door slides, or that one remains fixed in place.</p>
			<p>Triple-track sliding doors are used for sliding door systems with 3 or more panels. The triple tracks allow for a much broader scope in configuring how the doors open. This can allow you to open up much more of the opening.</p>
			<h2>uPVC and Aluminium Sliding Doors</h2>
			<p>Our external sliding doors are available in both uPVC and aluminium. Which you choose depends on the style of your home, your budget and the look you wish to achieve. Both materials are available in a variety of colour options (white, black or anthracite grey), and in a variety of sizes. If you’re looking for a more affordable option, our uPVC sliding patio doors are available at great low prices. If slimmer frames and a more modern look are what you’re after, you may prefer our sliding aluminium doors.</p>
			<h2>Double Glazed Sliding Doors</h2>
			<p>Whether uPVC or aluminium, all of our external sliding doors feature double glazing for enhanced energy efficiency and noise reduction. You’ll save money on energy bills and enjoy peace and quiet at the same time!</p>
			<h2>Are Sliding Doors Safe?</h2>
			<p>Our external sliding glass doors come equipped with both toughened safety glass (to BSEN12150 and BSEN1279) and multi-point locking systems. So they are both safe and secure. The glazing is internally beaded, which makes it much harder to remove, further enhancing your home’s security. Another safety advantage of sliding doors over folding doors or French doors is that it is harder for little fingers to get trapped in any hinges, so if you’ve got children, they’re a great choice.</p>
			<p>Whether you’re building a new home or upgrading your existing patio doors, you’re sure to find something to love in our external sliding doors range. Buy your new sliding glass doors online today, and get free delivery when you spend over £750!</p>
			<p>Prices include VAT.</p>
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