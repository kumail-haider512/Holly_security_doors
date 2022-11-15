@extends('layouts.master')
@section('title','Buy External Doors Online: Wooden Front & Back Exterior Doors')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div>
			<div id="breadcrumbs">
				<ul>
				<li>
				<a href="{{route('home')}}" title="Holly Security Doors Home" itemprop="item">
				Home</a></li>
				<li><span>〉</span></li>
				<li>
				<a href="{{route('External Doors')}}" title="Buy External Doors Online: Wooden Front & Back Exterior Doors">External Doors</a></li>
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
			<h6 class="subtitle"><span>The Holly Security Doors External Doors Range</span></h6>
			<p>If you're looking to buy external doors online, we have selected a range of softwood and hardwood exterior doors and <a href="#">door frames</a> that will add kerb appeal (not to mention value) to your home, whether it is a traditional, contemporary or glazed appearance that you’re looking for. Our exterior wood doors are thermally efficient, secure and made from only the finest materials. With a vast selection of styles available, including both glazed doors and non-glazed external doors (plus <a href="#s">external door frames</a> to match), they're sure to make you the envy of your neighbours.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="choice" src="img/icon-configure.png" alt="choice" width="61" height="57"></p>
			<h2>Huge Choice of External Wooden Doors</h2>
			<p>Our wood external doors product range is manufactured using only the finest quality timber and joinery, which offers long-standing performance and a striking appearance. Choose from our great value range of hardwood exterior doors such as oak, or softwood like hemlock or redwood. Our <a href="#">solid wood front doors</a> are perfect for adding kerb appeal and elegance to your home. And they're available in both modern and traditional styles, so you're sure to find the perfect <a href="#">front door</a> for your home. We even have <a href="#">double wood front doors</a> available for those really grand entrances. While you're at it, why not give your back door an update from our wooden back door range?</p>
			<p>If you’re looking to make a real difference to your home, <a href="#">external oak doors</a> can add class and a lasting style like no other. Oak is the most popular timber used in the home today. You'll find furniture, flooring, and kitchens all made from this attractive wood. Why not select an appropriate external door to match? You can choose the finish that suits you, too. If you're looking for something that's ready to hang right away, a fully-finished exterior wooden door takes care of that. But if you want to paint or stain your door yourself, a white primed or unfinished exterior door is your best bet.</p>
			<h2>Customise Your Exterior Doors</h2>
			<p>Our external doors are fully customisable with different hardware, finishes, materials, sizes and glazing options available, so it's easy to find the perfect door for your home. Whether half-glazed or fully-glazed, our exterior doors with glass panels make fabulous features for your home. Our beautiful glazed <a href="#">hardwood external doors</a> (for the front entrance and the back entrance) are traditional in appearance. Their sturdy construction and presence make them timeless classics, ideal if you're trying to create period authenticity. Choose your own accessories and door furniture, including fixings, latch and door handles, to complete the look. For our wider exterior glazed doors product range, there is a huge selection of styles designed to let light flood into your home, from single narrow glass panels to fully-glazed doors, all featuring toughened glass for safety. Our exterior doors are available in a variety of sizes so you can find the right fit for your current frame. Or why not complement your door with a set of matching sidelights?</p>
			<p>If it's unglazed you're looking for, we also have a wide selection of unglazed exterior doors. Modern or traditional, hardwood or softwood, finished or unfinished, you'll find the perfect door for you here.&nbsp;</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="thermal efficiency" src="img/thumb_6.png" alt="thermal efficiency" width="61" height="57"></p>
			<h2>Thermally Efficient Exterior Wooden Doors</h2>
			<p>Your external doors, just like your windows, need to stand up to weather, condensation and draughts. It's important that <a href="#">external doors are energy efficient</a> to keep the heat in and the cold out.</p>
			<p>Double glazing in our wooden external doors ensures adequate insulation. We'll specify if they are part L compliant, <a href="#" target="_blank">like our Newbury Oak</a>,&nbsp;(helping you meet the building regulation on the conservation of fuel and power in buildings). You'll also find our low u-values listed on the detail page of each door where applicable.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="security" src="img/thumb_5.png" alt="security" width="61" height="57"></p>
			<h2>External Door Security</h2>
			<p>The security of your home is a key consideration when it comes to external doors. That's why we provide sturdy wooden front doors and back doors to keep you secure. Install with safety hinges, a multi-point locking system, or mortice deadlocks for top <a href="#">door security</a>. You can also fit a door chain to exterior wooden doors more easily than uPVC doors.</p>
			<p>In addition, all the glazing in our wooden external doors uses toughened glass. This safety glass not only offers enhanced security but helps keep your home the warmest it can be by providing thermal insulation. When you buy external doors from Holly Security, you know you're getting the best.</p>
			<p>If you're looking for something to improve the view out to your patio or garden, don't forget to take a look at our selections of <a href="#">French doors</a> and <a href="#">bifold doors</a>&nbsp;as well.&nbsp;</p>
			<p>All available with a 10-year guarantee and free delivery on orders over £750. We're the timber door experts, so buy external wooden doors online at Holly Security Doors today!</p>
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