@extends('layouts.master')
@section('title','About Us')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div id="breadcrumbs">
			<ul>
				<li>
					<a href="/" title="Holly Security Doors Home">Home</a>
				</li>
				<li><span>〉</span></li>
				<li><a href="{{route('about-us')}}" title="About Us">About Us</a>
				</li>
			</ul>
		</div>
		<img src="img/thumb_1.jpg" alt="Holly Security Doors" class="lifestyle">
		<div class="flex sales">
			<div class="c_33">
				<div class="msg">
					<a href="#" title="Free Delivery">Free Delivery <br>in 3-7 Days*</a>
				</div>
			</div>
			<div class="c_33">
				<div class="msg">
					<a href="{{route('faq')}}" title="All prices include VAT">All prices<br>include VAT</a>
				</div>
			</div>
			<div class="c_33">
				<div class="msg">
					<a href="#" title="10 Year Guarantee">10 Year<br>Guarantee</a>
				</div>
			</div>
		</div>
		<p class="disclaimer">* On orders over £750. To most mainland locations</p>
		<div class="inner_content top_pad">
			<h1>About Us</h1>
			<p>Holly Security Doors are proud to be one of the leading suppliers in UK of<span style="text-decoration: underline;"><strong> <a title="Internal Doors" href="#">interior doors</a></strong></span><strong> </strong>and<strong><span style="text-decoration: underline;"> <a title="External Doors" href="#">exterior doors</a></span></strong>. Our extensive range of high quality stock internal doors and external doors which are available in both contemporary and traditional styles, provide something to suit everyone’s budget.</p>
			<p>A high quality <span style="text-decoration: underline;"><strong><a title="Entrance Doors" href="#">entrance door</a></strong></span> is extremely important for two reasons, firstly, the need for security, but it also projects a certain image. A well- chosen entrance door will add sophistication to your home, giving an excellent first impression. Our exterior doors are beautifully manufactured from a mixture of timbers including OAK, hardwood or softwood, in both classic and modern styles. To add an individual touch, we have a number of glazed options, such as leaded, bevelled or satin glass, and for complete privacy, we also offer solid options.</p>
			<p>An attractive interior door should be considered to be part of a rooms decorative appeal.. Available in oak, walnut or pitch pine, all are suitable for any decor, whether traditional or contemporary. Many of our doors are offered pre-finished as factory applied decoration gives a far superior finish to that that can be achieved through traditional methods. Toughened safety glass is used as standard in all our <span style="text-decoration: underline;"><strong><a title="Internal Doors" href="#">internal doors</a></strong></span>, making them suitable for a home with small children. We offer all our door ranges in both standard design and some of those that give security in the event of a unexpected fire. Take a look for yourself at our superb ranges.<br><br>Holly Security Doors are at the forefront of the market with the significantly growing trend for "bringing the outdoors in" with its superb range of External Patio Doors. Take a look at both our<strong> <span style="text-decoration: underline;"><a title="Bi Fold Patio Doors" href="#">bi-fold patio doors</a></span> </strong>and our<strong> <span style="text-decoration: underline;"><a title="French Doors" href="#">French Doors</a></span></strong>. These will really brighten up your home, creating a feeling of extra space. We pride ourselves on being highly competitive in this area taking into consideration the key needs of heat retention, contemporary design, security and of course the cost. All of our doors whether interior or exterior comply with European safety standards and are tested to prove their performance. Our ranges of folding and french doors in standard sizes fill openings from just 1200mm (4ft) wide, right up to 4800mm (16ft).</p>
			<p>The advent of <strong><a title="External Bi-Fold Doors" href="#">exterior bi-folding doors</a></strong> has led to a growing requirement for separating larger rooms internally through the use of <strong><span style="text-decoration: underline;"><a title="Internal Bi-Fold Doors" href="#">internal Bi-fold doors</a></span> </strong>and <span style="text-decoration: underline;"><strong><a title="Room Dividers" href="#">room dividers</a></strong></span>. These products provide an effective way of separating it into two distinct areas, yet allowing you to open it up when necessary. Our Room dividers are manufactured from top quality white oak, solid white primed or clear pine , our dividers offer many patterns, making them an extremely attractive focal point when finished.</p>
			<p>Our versatile <strong><span style="text-decoration: underline;"><a title="Internal Folding Sliding Doors" href="#">internal folding sliding door</a></span></strong> system allows you to choose the doors that best match your desired location. By purchasing the <strong><span style="text-decoration: underline;"><a title="Roomfold System" href="#">roomfold system</a></span> <a href="#"></a></strong>you have a frame and full set of hardware to match the door pattern and size you choose. <br><br>We back our product offer with superb <span style="text-decoration: underline;"><strong><a title="Guarantees" href="#">guarantees</a></strong></span> and <span style="text-decoration: underline;"><strong><a title="Service" href="{{route('service')}}">great service</a></strong></span>. Our aim is to deliver quality products to your door, within 3 working days.......a service that cannot be beaten!  And dont forget our prices will always remain extremely competitive.</p>
			<p>Our showroom is open Monday to Friday 0900 to 1700hrs, and by appointment on Saturday between 0900 and 1200hrs. Come down and take a look at some of our superb quality products.</p>
			<p>THE GREENHOUSE</p>
			<p>73 HIGH STREET , GOLDAMING</p>
			<p>SURREY</p>
			<p>GU7 1AW</p>
			<p>Tel 01442781148 for more details.</p>
			<div class="flex">
				<div class="c_50">
					<h3>Visit Our Showroom</h3>
					<p><span class="bold">Opening Hours:</span><br>
					Monday to Friday 0900 to 1700<br>
					Saturday 0900 to 1200 (By Appointment Only).</p>
					<p>Come down and take a look at some of our superb quality products.</p>
					<h4>Holly Security Doors Ltd</h4>
					<p>THE GREENHOUSE,<br> 73 HIGH STREET , GOLDAMING ,<br> SURREY,<br> GU7 1AW</p>
					<p><a href="{{route('contact-us')}}" title="Contact Us" class="btn">Book Your Appointment Now</a> <span class="large">or Call <span class="rTapNumber53432" style="visibility: visible;">01442781148</span></span></p>
				</div>
				<div class="c_50">
					<img src="{{asset('img/thumb_3.jpg')}}" class="showroom">
				</div>
			</div>
		</div>
	</div>
</div>
@endsection