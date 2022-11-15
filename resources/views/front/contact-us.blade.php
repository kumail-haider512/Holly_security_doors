@extends('layouts.master')
@section('title','Contact Us')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div id="breadcrumbs">
			<ul>
				<li>
					<a href="/" title="Holly Security Doors Home" itemprop="item">Home</a>
				</li>
				<li>
					<span>〉</span>
				</li>
				<li>
					<a href="{{route('contact-us')}}" title="Contact Us">Contact Us</a>
				</li>
			</ul>
		</div>
		<div class="inner_content contact_wrap border_wrap">
			<div class="flex">
				<div class="c_50">
					<h3>Contact us</h3>
					<form name="contact" method="post" action="">
					<div class="flex">
						<div class="c_50">
							<label for="name">Name*</label>
							<input name="name" type="text" value="" id="name">
						</div>
						<div class="c_50">
							<label for="email">Email*</label>
							<input name="email" type="text" value="" id="email">
						</div>
						<div class="c_50">
							<label for="telephone">Telephone*</label>
							<input name="telephone" type="text" value="" id="telephone">
						</div>
						<div class="c_50">
							<label for="order_number">Order Number (If Applicable)</label>
							<input name="order_number" type="text" value="" id="order_number">
						</div>
						<div class="c_100">
							<label for="message">Message*</label>
							<textarea name="message" cols="40" rows="5"></textarea>
						</div>
						<p><input name="submit" type="submit" value="Send"></p>
					</div>
					</form>
				</div>
				<div class="c_50">
					<h3>How To Find Us</h3>

					<h3>Address &amp; Opening Times</h3>
					<p>
					THE GREENHOUSE,<br> 73 HIGH STREET , GOLDAMING,<br> SURREY,<br> GU7 1AW </p>
					<p><span class="bold">Opening Hours:</span><br> Monday to Friday 0900 to 1700<br> Saturday 0900 to 1200 (By Appointment Only).</p>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection