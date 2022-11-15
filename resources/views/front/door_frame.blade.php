@extends('layouts.master')
@section('title','Door Frames, Linings & Skirting For Internal & External Doors')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div>
			<div id="breadcrumbs">
				<ul>
				<li>
				<a href="/" title="Holly Security Doors Home">
				Home</a></li>
				<li><span>〉</span></li>
				<li>
				<a href="{{route('Door Frames, Mouldings & Hardware')}}" title="Door Frames, Linings & Skirting For Internal & External Doors">Door Frames and Hardware</a></li>
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
			<h6 class="subtitle"><span>The Holly Security Doors Door Frames, Mouldings &amp; Hardware Range</span></h6>
			<p>Door frames are the structures that doors are fitted to, whether sliding doors, hinged doors or bifold doors. They provide support and a solid framework for the door to sit in. They also create a seal around the door opening, preventing draughts and hiding gaps between the wall and door.&nbsp;</p>
			<p>Door mouldings are decorative strips of wood that are used to create a more aesthetically pleasing finish to your doors. This could be by creating "panels" on the door's surface, adding detail to the door frame or covering any gaps or rough joins. Mouldings include items like architraves, skirting boards, trims and beading.&nbsp;</p>
			<p>Internal <a href="#">door hardware</a>, also known as door furniture, is items such as handles, locks, hinges and catches. Basically, it's anything that's added to a door to help it function properly as a door.&nbsp;</p>
			<h2>Our Range of Interior Wood Door Frames and Architraves</h2>
			<p>When framing an internal door opening it’s important to work carefully and accurately. If the door frame doesn’t fit perfectly your door may jam, stick or become difficult to use. Conversely, a well-fitted door frame will help reduce draughts, keeping you snug and warm.&nbsp;</p>
			<p>If you're looking to buy a door frame, look no further. We stock a comprehensive range of internal door frames, <a href="#">door linings and architrave kits</a>, so you're sure to find everything you need for your new doors. Like our doors, our hardwood door frames and door linings come unfinished, prefinished or white primed, so whichever doors you choose, you'll find a frame to suit. We also have a wide range of <a href="#">skirting boards</a> available, so you can match these to your internal doors and frames. Choose from walnut or oak, unfinished, white primed or prefinished. Our skirting boards come in a range of styles too, to suit the look of your home - simple Shaker-style, sleek ogee, or decorative Victorian.&nbsp;</p>
			<h2>Choosing An External or Internal Door Frame</h2>
			<p>Our oak door frames are made to match our stunning timber doors, so you can create a consistent appearance throughout your home. Choose from <a href="#">internal door</a> frames in oak veneered mdf, or select <a href="#">external door frames</a> crafted from hardwood and oak. Prefinished wood is ideal if you want to install straight away but unfinished works well for those who want to paint or stain their frame to match a door with a unique finish or colour.</p>
			<p>We stock a wide range of external and internal oak door frames at competitive prices. Our exterior door frames and kits are supplied flat pack complete with weather-seals and water bars. We offer mortice and tenon joints in sizes to suit most standard exterior door types. We’re confident that we can help you find a frame to fit whatever the size of your door, as our range covers sizes to suit all standard doors. Our door frames can be easily trimmed to the specific door size if necessary. We can also offer door frame screens up to 3052mm wide and up to 2360mm high, so please get in touch if you can’t see what you need online.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="sizing" src="{{asset('img/icon-measure.png')}}" alt="sizing" width="61" height="57"></p>
			<h2>What Size Door Frame Do I Need?</h2>
			<p>To determine the size of frame you need, first measure the height of the brickwork opening at either side and in the centre. Next, measure the width of the brickwork at the top, middle and bottom of the opening. Take the average of each set of measurements as the size for the opening. Deduct approx. 10mm (0.4”) from the average height and width. This defines the height and width of door frame you will need.</p>
			<p>Find out more about door frame sizes in our <a href="#">door frame size guide</a>.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="tick" src="{{asset('img/icon-tick.png')}}" alt="tick" width="61" height="57"></p>
			<h2>More Than Just the Door Frame…</h2>
			<p>We stock interior door linings, skirtings, architraves and exterior weather bars so you can complete your door installation whatever your needs. Vestibule frame kits suitable for front entrance frames with sidelights are available too, and you can choose both door and sidelights for these frames from our range to create an entrance of your choice.</p>
			<p>Whether you’re working on a self-build, renovation or just looking to give your home a makeover, we’re here to help. If you’d like to talk to an expert don’t forget you can visit our <a href="#">door showroom</a> Mon-Fri or Sat by appointment.&nbsp;</p>
		</div>
		<div class="back_up"><img src="/images/icon-up.png" alt="Up">
		</div>
		<div id="article_wrap">
			<h6 class="subtitle"><span>Help, Tips &amp; Advice</span></h6>
			<div class="flex">
				<div class="c_25">
					<div class="inner">
						<a href="#!">
						<img src="" class="Sirv" alt="Bifold Doors: Your Frequently Asked Questions – Answered!" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Bifold Doors: Your Frequently Asked Questions – Answered!">Bifold Doors: Your Frequently Asked Questions – Answered!</a></h4>
						<p>If you're thinking of buying a set of bifold doors, no doubt you'll have a few questions before you make your purchase. Here we'll be addressing all of the most common door FAQs that arise when it com...</p><a href="#" title="View Bifold Doors: Your Frequently Asked Questions – Answered!" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#">
						<img src="" class="Sirv" alt="How To Choose The Right Internal Bifold Doors" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View How To Choose The Right Internal Bifold Doors">How To Choose The Right Internal Bifold Doors</a></h4>
						<p>If you're looking for a way to liven up your homestead that will not only look striking, but will open up your space to a number of fresh possibilities, internal bifold doors are a wonderful option. H...</p><a href="#" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#">
						<img src="" class="Sirv" alt="Installing Internal Bifold Doors" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Installing Internal Bifold Doors">Installing Internal Bifold Doors</a></h4>
						<p>Most houses built in the latter half of the 20th century will undoubtedly have been built with cumbersome sliding doors, but that doesn't necessarily mean you have to be stuck with them. Why not, inst...</p><a href="#" title="View Installing Internal Bifold Doors" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View What Are Bifold Doors?">
						<img src="" class="Sirv" alt="What Are Bifold Doors?" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View What Are Bifold Doors?">What Are Bifold Doors?</a></h4>
						<p>Bifold doors&nbsp;definition is doors that slide open,&nbsp;made from a series of panels that fold up against the wall like a concertina. Although conventional, single leaf doors are common in most mo...</p><a href="#" title="View What Are Bifold Doors?" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View All About Internal Bifold Door Handles">
						<img src="" class="Sirv" alt="All About Internal Bifold Door Handles" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View All About Internal Bifold Door Handles">All About Internal Bifold Door Handles</a></h4>
						<p>If you've made the decision to liven up the interior of your home with a set of&nbsp;internal bifold doors, you might also want to consider accessorising to make sure they are perfectly suited to your...</p><a href="#" title="View All About Internal Bifold Door Handles" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Internal Bifold Door Glazing">
						<img src="" class="Sirv" alt="Internal Bifold Door Glazing" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Internal Bifold Door Glazing">Internal Bifold Door Glazing</a></h4>
						<p>Now that you've (presumably) decided to install&nbsp;internal bifold doors&nbsp;in your home, thereby increasing not only the financial value of your home&nbsp;but its aesthetic value as well, there a...</p><a href="#" title="View Internal Bifold Door Glazing" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#">
						<img src="" class="Sirv" alt="All About Internal Bifold Door Tracks" referrerpolicy="no-referrer-when-downgrade"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View All About Internal Bifold Door Tracks">All About Internal Bifold Door Tracks</a></h4>
						<p>Internal bifold doors&nbsp;are a great option for wardrobes as you can open them up for more access, they take up minimal space, and they could give your room a pleasant, finished look. Whilst you mig...</p><a href="#" title="View All About Internal Bifold Door Tracks" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Bifold Door Problems And How To Fix Them">
						<img src="" class="Sirv" alt="Bifold Door Problems And How To Fix Them" referrerpolicy="no-referrer-when-downgrade"></a>
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