@extends('layouts.master')
@section('title','Door Showroom Derby, Get Expert Door Advice From Holly Security Doors')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div id="breadcrumbs">
			<ul itemscope="" itemtype="http://schema.org/BreadcrumbList">
				<li><a href="{{route('home')}}" title="Holly Security Doors Home">Home</a> 
				</li>
				<li><span>〉</span>
				</li>
				<li><a href="{{route('showroom')}}" title="Showroom">Showroom</a>
				</li>
			</ul>
		</div>
		<img src="img/thumb_8.jpg" alt="Holly Security Doors" class="lifestyle">
		<div class="bookings">
			Open 9 til 5 Mon-Fri 9 til 12 Saturday <span>(Saturday by Appointment Only)</span> <a href="{{route('contact-us')}}" title="Contact Us" class="btn">Book Your Appointment Now</a>
		</div>
		<div class="inner_content showroom">
			<h1>Visit Our Showroom</h1>
			<h4></h4>
			<h4><strong>Our Showroom is open Monday to Friday 0830 - 1700 where no appointment is required.</strong><span></span></h4>
			<p><strong>We do open on a Saturday morning 0900-1200, by pre arranged appointment only. Please email us for an appointment.</strong></p>
			<p>Visit our door showroom to see our wide range of <a class="bold" title="Internal Doors" href="#">internal doors</a> and <a class="bold" title="External Doors" href="#">external doors</a> including the brand new <a href="#">Climadoor </a>and NUVU ranges as well as our stunning, top-quality <a title="French Doors" href="#">French doors</a>.<br>Please call in advance to ensure we have the doors you are looking for, or something similar. Whilst our showroom has a large variety, we do not have all our products on show.</p>
			<p>We understand that choosing the right door set up for your home can be complicated so our expert staff are on hand to offer advice and help you choose the perfect product. Whether you're looking for <a href="#">solid wood front doors</a>, a new <a class="bold" title="Back Doors" href="#">back door</a>, <a href="#">bifold doors</a> or stylish <a class="bold" title="Internal Doors" href="#">interior doors</a>, our staff are on hand to assist you. We can help you to make the right choice for your home, providing expert guidance on selecting and fitting your new doors.</p>
			<p>Located on the outskirts of Derby our large showroom serves as a convenient location for Derbyshire and the Midlands. If you're looking for a door showroom near you, our location is also ideal for access from Nottingham, Leicester and even Birmingham. We welcome all visitors from further afield too, so drop in Monday - Friday or book a Saturday morning appointment.</p>
			<p>When you arrive, you will have the freedom to peruse our extensive range at your leisure. See the doors up close to feel the quality of our solid premium timber construction, so you can be sure your new doors offer superior engineering and lasting durability at competitive prices. Get a feel for <a class="bold" title="Oak Doors" href="#">oak</a>, <a class="bold" title="Pine Doors" href="#">pine</a>, <a class="bold" title="Hardwood Doors" href="#">hardwood</a> and even <a class="bold" title="Aluminium Doors" href="#">aluminium</a> to select the material that's best for your needs.</p>
			<p>If you're looking to update more than just your doors, you can also browse our windows range, including sash and casement windows in a range of materials to compliment your choice of door. Our showroom is also the perfect place to discuss <a class="bold" title="Bespoke Windows and Doors" href="#">bespoke windows and doors</a> if you're taking on a self-build or renovation project and your needs cannot be met by standard designs and sizes. We offer a full one stop shop for custom made and made to measure projects.</p>
			<p>Once you have chosen your perfect doors, you can either arrange to collect them at a later date, or we will deliver them to you within 5 working days. The choice is yours, so be sure to pay us a visit so we can help you find your perfect door solution!</p>
			<p><strong>**NOTE - Our showroom is closed on bank holidays**</strong></p>
			<div class="flex">
				<div class="c_50">
					<h3>Address &amp; Opening Times</h3>
					<p>Unit 2,<br> Sinfin Commercial Park,<br> Sinfin Lane,<br> Derby. DE24 9HL</p>
					<p><a href="{{route('contact-us')}}" title="Contact Us" class="btn">Book Your Appointment Now</a> <span class="large">or Call <span class="rTapNumber53432" style="visibility: visible;">01332 895 742</span></span></p>
					<p><span class="bold">Opening Hours:</span><br>
					Monday to Friday 0900 to 1700<br>
					Saturday 0900 to 1200 (By Appointment Only).</p>
				</div>
				<div class="c_50">
					<h3>How To Find Us</h3>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection