@extends('layouts.master')
@section('title','Internal Bifold Doors External Patio Doors To Enhance Your Home')
@section('content')
<div id="content_wrap">
	<div class="content">
		<div id="banner">
			<div class="flex">
				<div class="c_50" style="background-image:url('img/BLAHERFR2100.png')">
				</div>
				<div class="c_50">
					<div class="tag">
						<h2>
							<a href="#" title="View Climadoor Black Heritage Style Aluminium French Doors">Climadoor Black Heritage Style Aluminium French Doors
							</a>
						</h2>
						<p class="strapline">Introducing Modern design techniques into a bygone era, these Thermally Broken Black Heritage Range of Aluminum French Doors exudes style and panache for those customers looking to create that traditional Crittall look.</p>
						<p>£1,499.00 - £2,999.00</p><br>
						<a href="#" title="View Climadoor Black Heritage Style Aluminium French Doors" class="btn">View Range</a>
					</div>
				</div>
			</div>
		</div>
		<h6 class="subtitle"><span>Featured Ranges</span></h6>

		<div class="flex negative featured_products">
			@foreach($list as $item)
			<div class="c_25">
				<div class="box">
					<a href="{{route($item->name,$item->id)}}" title="External Bifold Doors" class="cat_link"><img src="{{asset($item->image)}}" class="Sirv" referrerpolicy="no-referrer-when-downgrade"></a>
					<div class="product_tag">
						<h4 style="height: 21.1111px;">
							<a href="#" title="External Bifold Doors">{{$item->name}}</a>
						</h4>
						<br>
						<p style="height: 120px;">{{$item->description}}</p>
						<div class="flex">
							<div class="c_50">
								<a href="doors/external-folding-sliding-doors" title="External Bifold Doors" class="btn">View Range</a>
							</div>
							<div class="c_50"><span>From £{{$item->range}}</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<h6 class="subtitle"><span>Why Choose Holly Security Doors</span></h6>
		<div class="flex features">
			<div class="c_25">
				<img src="img/thumb_4.png">
				<h6>Premium Timber</h6>
				<p>Products manufactured using the finest sourced timber</p>
			</div>
			<div class="c_25">
				<img src="img/thumb_5.png">
				<h6>Safe &amp; Secure</h6>
				<p>Multi Point Locks for <br>complete security</p>
			</div>
			<div class="c_25">
				<img src="img/thumb_6.png" alt="Thermally Efficient">
				<h6>Thermally Efficient</h6>
				<p>Products fully satisfy Part L of The Building regulations</p>
			</div>
			<div class="c_25">
				<img src="img/thumb_7.png" alt="10 Year Guarantee">
				<h6>10 Year Guarantee</h6>
				<p>Doors guaranteed for 10 years against manufacturing defects</p>
			</div>
		</div>
		<div class="company">
			<p>Welcome to Holly Security Doors, the UK's leading supplier of high-quality timber doors. Based in Derby, serving Leicester, Nottingham and the wider UK, we pride ourselves on the superb quality of the doors we offer. We work with the best door factories in the world to bring you a superb range of products, all available online with delivery in 72 hours. Expect flawless joinery and finishing, decorative mouldings and&nbsp;excellent guarantees.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="door" src="img/icon-opendoor.png" alt="door" width="61" height="57"></p>
			<h2>What A Difference A Door Makes!</h2>
			<p>Our homes have a big impact on our quality of life, so comfort is key. The quality of light and flow between rooms can make a big impact on your day-to-day life. Doors are a key component to maintaining an easy flow and creating light and airy living space. Every day we rely on them to allow us access to space, block off rooms, let in the light, control drafts and reduce noise. The right doors can make a huge difference to the way we live and the way we feel.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="choice" src="img/icon-configure.png" alt="choice" width="61" height="57"></p>
			<h2>Choice</h2>
			<p>Our extensive range covers everything from <a href="#">internal doors</a> to <a href="#">external doors</a>, <a href="#">bifold doors</a> to <a href="#">French doors</a> and even <a href="#">bespoke timber windows and doors</a>. The choice is endless. When you want to introduce light, try a glazed door.&nbsp;Divide a room with a sliding or concertina door, or keep out the draughts&nbsp;with a solid oak design. Get maximum security with minimum budget and fuss by installing a composite door. Our speciality is high-quality timber so you won’t find any upvc options here. We offer a variety of materials and finishes so you can match with existing flooring, furniture or worktops. Choose fixings and handles to suit your decor for that finishing touch.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="leaf" src="img/icon-leaf.png" alt="leaf" width="61" height="57"></p>
			<h2>Bring The Outside In</h2>
			<p>Easy movement between indoor and outdoor living areas can help you enjoy sunny days and make your living space feel larger. That's what&nbsp;bifold patio doors and external French doors are designed for. What's more, installing a door with large glass panes can help you to see out into&nbsp;conservatories, gardens or patios to create a feeling of spaciousness and let in natural light. &nbsp;We love helping you improve your home, that’s why we specialise in bifolding doors.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="measure" src="img/icon-measure.png" alt="measure" width="61" height="57"></p>
			<h2>Made To Measure</h2>
			<p>If you have any made to measure window or door requirements you should give us a call. We can advise on technical solutions and have access to the best joinery factories in the UK. If you’re working on a renovation or self-build project we can offer you a one stop shop for all your internal and external joinery.</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="tick" src="img/icon-tick.png" alt="tick" width="61" height="57"></p>
			<h2>Service</h2>
			<p>Our technical support and knowledge of the products we sell is second to none. We can give you support and advice to make sure you get the right door at the right price. We aim to deliver high-quality products right to your door within 3 days offering you convenience when you shop with us online.&nbsp;</p>
		</div>
	</div>
</div>

@endsection