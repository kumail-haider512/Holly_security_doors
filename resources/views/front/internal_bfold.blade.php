@extends('layouts.master')
@section('title','Internal Bifold Doors: Oak Concertina Folding Doors & Room Dividers')
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
				<a href="{{route('Internal Bifold Doors')}}" title="Internal Bifold Doors: Oak Concertina Folding Doors & Room Dividers" itemprop="item">Internal Bfold Doors</a></li>
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
			<h6 class="subtitle"><span>What are Internal Bifold Doors</span></h6>
			<p><span>Internal bifold doors are interior doors that fold back panel by panel, rather than opening out on a standard hinge. Despite the name, many of them actually have more than two panels. Depending on the size of the opening, you may have three or four! Internal bi fold doors are fantastic for creating a seamless transition between rooms, really letting you open up your living space.</span></p>
			<p><span><span>We are delighted to offer a wide range of designer oak internal <a href="#">bifold doors with glass</a> for you to choose from. Whatever the style of your home, we’re sure that there’s an internal&nbsp;</span><a href="#" rel="noopener noreferrer" target="_blank">bi-fold doors</a><span>&nbsp;system for you. From Roomfold Standard to&nbsp;Roomfold Deluxe folding&nbsp;</span><a href="#">internal doors</a><span>, we’ve a variety of traditional and modern styles, all with a 10 year guarantee. You really are spoiled for choice!</span></span></p>
			<p><a href="#">Internal oak bifold doors</a> are a fantastic way to connect the living spaces in your home, whether it's kitchen to living room, dining room to playroom or bathroom to bedroom. They're stylish, elegant and hardwearing and look great in both new build and older homes.</p>
			<p>For smaller spaces and openings, we also offer a wide range of <a href="#">single-leaf internal bi fold doors</a>, available both with and without glass. These single folding doors are ideal for small kitchens or bathrooms where a full-width door may take up too much space. Like our multi-panel interior bi fold doors, these single doors are available either glazed or unglazed, and prefinished, white primed or unfinished.</p>
			<p></p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="open plan living" src="img/icon-openplan.png" alt="open plan living" width="61" height="57"></p>
			<h2>Bifolding Doors and Open Plan Living</h2>
			<p><span>If you have limited space in your home or you want to create storage space or division between rooms, internal folding doors are perfect for you. They act as stylish and contemporary room dividers. Their glass panes provide an unobstructed view whilst also creating clear spaces with privacy and sound-proofing. Open your folding doors up for spacious living and easy access, and close them to create interior partitions or ‘zones’.&nbsp;Use your internal bi fold doors in combination with sidelights to create a “wall” of windows and really let light flow through.</span></p>
			<h3 class="ql-align-center">Made to Measure Bifold Doors</h3>
			<p class="ql-align-center">Our bifold internal door systems are available in a wide range of sizes. However, if you've got a door opening that's awkwardly sized, we also offer bespoke internal bifold doors. Give us a call to discuss your requirements.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="hardware" src="img/icon-fitting.png" alt="hardware" width="61" height="57"></p>
			<h2>Folding Door Hardware &amp; Accessories</h2>
			<p>Our high quality solid timber internal bi folding doors are supplied complete with frame, track and running gear, all in an easy to assemble kit for quick installation. As there's no base guide on the NUVU Roomfold, and a low-level base guide on the Climadoor Roomfold Deluxe, you can enjoy a wider choice of frame sizes and door panel sizes. When it comes to door furniture, we supply our bifold interior doors without door handles and drop bolts so that you can match them to the existing handles on your current doors and windows.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="finishes" src="img/icon-finishes.png" alt="finishes" width="61" height="57"></p>
			<h2>Choice of Internal Folding Door Finishes</h2>
			<p class="ql-align-center">Timber is our specialty, so you can be assured that our oak veneer and white primed bifolding doors options are of the highest quality. Choose from pre-finished or unfinished to suit your budget and requirements.</p>
			<h3 class="ql-align-center">Unfinished Interior Bifold Doors</h3>
			<p class="ql-align-center">If you want to completely customise your new internal bi fold doors, then opt for unfinished oak. This allows you to stain, paint or varnish the doors to match your home's decor.</p>
			<h3 class="ql-align-center">White Primed Bifold Doors</h3>
			<p class="ql-align-center">Our white primed internal oak bifold doors come with an immaculate white factory primer finish. They can be hung as they are for a bright, clean look, or finished off with a coat of paint in the colour of your choice.</p>
			<h3 class="ql-align-center">Pre-finished Internal Bifold Doors</h3>
			<p class="ql-align-center">If you're looking for doors that can be hung with minimal fuss, then our fully-finished bifolding doors are the doors for you. Finished with a smooth factory-applied lacquer to show off the beauty of the oak veneer, they'll save you time as you won't need to wait for paint or varnish to dry. All you need to do is fit the handles of your choice and you're good to go.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="glass" src="img/icon-glass.png" alt="glass" width="61" height="57"></p>
			<h2>Glass-Paned Folding Concertina Doors</h2>
			<p><span>One of the reasons so many people opt for installing interior bifold doors sets is their glazing. Clear panels provide an unobstructed view throughout your home whilst frosted panels allow light flow while also protecting your privacy. These concertina style folding doors are popular for kitchen, office space, living room and dining areas but internal glazed bifold doors can also be installed in bathrooms and bedrooms.&nbsp;</span></p>
			<p><span>All our glazed bifold internal doors come fitted with toughened glass for safety, so there is no need to worry about children and pets. They're also energy efficient. All our bifold internal doors have low u values so they'll keep the heat where it's needed. So, if you're looking for a new, high-quality oak internal glass door that'll add a touch of class, elegance and plenty of natural light to your living space, look no further! Buy internal bifold doors from Holly Security today.</span></p>
			<p>Take a look at our information section for <a href="#">internal sliding door fitting guides</a>, <a href="#">FAQs</a>, <a href="#">troubleshooting tips</a> and more.</p>
			<h2>Buy Bifold Doors Online from Holly Security</h2>
			<p>We've got a lot more bi fold doors and timber doors to choose from. Complement your new internal bi fold doors with our range of <a href="#" target="_blank">solid oak internal doors</a>. If the outside of your home could do with a face-lift too, why not check out our range of high-quality&nbsp;<a href="#">external bifold doors</a><strong> </strong>online or read our guide on how to <a href="#">choose the best material for your bifold door</a>? All our doors come with a <a href="#">comprehensive guarantee</a> against manufacturing defects, and you'll get free UK delivery on orders over £750.</p>
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