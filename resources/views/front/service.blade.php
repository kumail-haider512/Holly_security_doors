@extends('layouts.master')
@section('title','Service')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div id="breadcrumbs">
			<ul>
				<li><a href="{{route('home')}}" title="Holly Security Doors Home">
				Home</a>
				</li>
				<li><span>〉</span></li>
				<li">
				<a href="{{route('service')}}" title="Service">
				Service</a>
				</li>
			</ul>
		</div>
		<div class="inner_content border_wrap">
			<h1>Service</h1>
			<h2 style="margin-top: 20px !important;">Service Pledge</h2>
			<p>At Holly Security Doors our customers are important to us and we aim to provide you with a high quality service starting from your initial online browsing experience to after- sales support and assistance.  </p>
			<p>We are proud to confirm that we are readily available to support and  assist you at any point during your Holly Security doors experience. We are here to help you and make sure that you buy the right product from us, so we have designed the website to ensure that every detail you need is easily visible, accessible and presented in an understandable way. </p>
			<p>At Holly Security Doors we are experts and know the high level of service and range of products our customers want. So here at Holly Security Doors we meet and exceed your requirements by delivering the very best prices, fastest delivery time in the market and a great selection of products. We are committed to achieving high levels of customer satisfaction and delivering you the complete package.</p>
			<p>If you have any questions about our products, services or policies please contact us immediately. </p>
			<p>We want you to visit us again and tell your friends and family of our excellent service - so we promise you we aim to get it right first time and deliver the highest quality of service every time.</p>
			<p>For further information regarding our service please <a title="Contact Us" href="{{route('contact-us')}}">Contact Us</a></p>
		</div>
	</div>
</div>
@endsection