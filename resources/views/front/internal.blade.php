@extends('layouts.master')
@section('title','Internal Doors: Oak, Solid Core, Panel & Glazed Interior Doors')
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
				<a href="{{route('Internal Doors')}}" title="Internal Doors: Oak, Solid Core, Panel & Glazed Interior Doors" itemprop="item">Internal Doors, Solid Wood Interior Single Leaf Doors</a></li>
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
			<h6 class="subtitle"><span>The Holly Security Doors Internal Doors Range</span></h6>
			<p>Internal doors are basically any doors in your home that do not open to the outside. They connect the rooms in your home. They might be single or double leaf, bifold, glazed, panelled, <a href="#">French doors</a> or many other things besides. Here on this page, you’ll find a range of high-quality timber interior doors, in a selection of styles, colours and glazing options, including FD30-rated fire doors. There are internal doors to suit every home, whether modern or traditional. And when you buy solid wood internal doors from Holly Security, you know you're getting the best!</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="choice" src="img/icon-configure.png" alt="choice" width="61" height="57"></p>
			<h2>Our Solid Wood Internal Door Range</h2>
			<p>As the UK’s leading door specialist, we’re here to help you find exactly what you need, whether you’re looking for something modern or more classic. Our extensive internal doors range includes popular <a href="#">solid oak doors</a>, oak veneer, <a href="#">pine doors</a>, <a href="#">hardwood doors</a>, moulded doors, <a href="#">fire doors</a> and more. We have such a huge variety of styles and designs that there’s something to suit every taste. Our internal doors are suitable for use throughout the home, whether that’s in the bedroom, bathroom, living room, dining room, office or kitchen. You can choose the finish you prefer, as well as hardware and glazing options for a completely customised look. If oak’s not your thing, try <a href="#">walnut</a> or pine. Opt for glazed if you want to let light throughout your home, or unglazed for a bit more privacy. Whatever you choose, you can be assured of quality and class.</p>
			<p>Our single leaf (also known as standard hinge) internal doors are ideal for typical door openings, but if you have a wider doorway, why not take a look at our range of <a href="#">internal bifold doors</a> or <a href="#rs">interior French doors</a>. These types of doors can act as room dividers, or really open up your living space and let light flow throughout your home. Our bestselling <a href="#r">Mexicano internal Oak doors</a>&nbsp;product range also has a matching bifold door so you can achieve a consistent, streamlined look throughout your home’s interior. What’s more, many of our door styles are available as FD30-rated <a href="#">internal fire doors</a>. The FD30 rating means these doors keep fire and smoke at bay for a minimum of 30 minutes, helping protect you and your family and assuring your safety.</p>
			<h3>Internal Door Styles and Sizes</h3>
			<p>We offer a huge range of products and styles, from Shaker to French, 4-panel to 6-panel, rustic to contemporary. So, you’re sure to find something to suit your tastes and your home. Our internal doors and frames are available in all&nbsp;<a href="#">standard sizes</a>, however we also offer a <a href="#">made-to-measure service</a> if your doors are a little bit more unusually sized or shaped, so get in touch.</p>
			<p>&nbsp;</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="quality" src="img/thumb_7.png" alt="quality" width="61" height="57"></p>
			<h2>Quality Interior Doors</h2>
			<p>Our specialty is timber (not uPVC), so you can expect all our&nbsp;<a href="#">solid wood internal doors</a>&nbsp;to be of the highest quality. We work with a variety of materials, but you can always expect excellent joinery, gorgeous panelled decoration and premium finishing. Choose from hardwood or softwood, solid wood or engineered doors to match your budget. Internal timber doors do require occasional woodcare to keep them in tip-top condition, but we think it’s worth it. Having quality solid wooden doors in your home can’t be beaten!</p>
			<p><span>We offer both glazed and unglazed interior wood doors. Where our doors include glass panels you can be sure they’re safe, secure and thermally efficient. Toughened glass is used in all our glazed interior door products for insulation, strength, and safety.</span></p>
			<p>&nbsp;</p>
			<p><img style="display: block; margin-left: auto; margin-right: auto;" title="finishes" src="img/icon-finishes.png" alt="finishes" width="61" height="57"></p>
			<h2>Choice of Interior Door Finishes</h2>
			<p><span>Select a high-quality finish direct from the manufacturer or go for primed white doors or unfinished if you want to paint your new internal doors to match your décor. You can also select your own door handles, hinges, accessories and fixings to match the existing handles on your doors and windows. All our internal solid wood doors come with generous lippings to allow you to trim to fit the size of door opening in your home. Our white doors are ideal for light, bright interiors, or for painting to suit your décor, while finished internal doors come ready to hang, with a minimum of fuss.</span></p>
			<h3 class="ql-align-center">Prefinished Internal Doors</h3>
			<p class="ql-align-center">For the minimum of fuss, choose from our prefinished wooden doors. Finished with a smooth lacquer coating to show off the beauty of the timber, these doors are ready to hang upon arrival. Just fit the handles of your choice and you're good to go!</p>
			<h3 class="ql-align-center">White Primed Internal Doors</h3>
			<p class="ql-align-center">Our white primed internal wooden doors come with a pristine, factory-applied coat of white primer. We think these doors look stunning just as they are, but you may wish to finish yours off with a coat of paint in the colour of your choice.</p>
			<h3 class="ql-align-center">Unfinished Internal Doors</h3>
			<p class="ql-align-center">If you want to fully customise your new doors, our unfinished internal wood doors may be the option for you. Paint, stain or varnish to your own requirements. You'll need to do a bit more work, but the flexibility of customisation is worth it!</p>
			<p>When you see what a difference a door can make inside your home, why not look at our range of&nbsp;<a href="#">external doors</a>&nbsp;to see what you could do to transform the outside too?&nbsp;&nbsp;</p> 
		</div>
		<div class="back_up"><img src="/images/icon-up.png" alt="Up">
		</div>
		<div id="article_wrap">
			<h6 class="subtitle"><span>Help, Tips &amp; Advice</span></h6>
			<div class="flex">
				<div class="c_25">
					<div class="inner">
						<a href="#"><img src="img/thumb (1).jpg?src=img/thumb (1.1).jpg&amp;w=280&amp;h=150" alt="Painting Internal Doors Image"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Painting Internal Doors">Painting Internal Doors</a></h4>
						<p>Most people understand that it is important to repaint external doors on a regular basis to repair weather damage, but interior doors are often overlooked. The truth is that interior doors take a lot ...</p><a href="#" title="View Painting Internal Doors" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View How to Fit an Internal Door"><img src="" alt="How to Fit an Internal Door Image"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View How to Fit an Internal Door">How to Fit an Internal Door</a></h4>
						<p>If your existing internal doors are looking tired and worn, maybe it’s time to replace them. A new door will add a whole new lease of life to any room. Once you've chosen your internal doors it'...</p><a href="#" title="View How to Fit an Internal Door" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Internal Door Sizing"><img src="" alt="Internal Door Sizing Image"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Internal Door Sizing">Internal Door Sizing</a></h4>
						<p>One thing that a lot of people don’t realise when they start renovating their homes is that internal doors come in several different sizes. There are “standard" door sizes&nbsp;but you can...</p><a href="#" title="View Internal Door Sizing" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Choosing Handles For Your Internal Doors"><img src="" alt="Choosing Handles For Your Internal Doors Image"></a>
						<h4 style="height: 43.2px;"><a href="#" title="View Choosing Handles For Your Internal Doors">Choosing Handles For Your Internal Doors</a></h4>
						<p>If you are looking for a way to revitalise your interior decor, and you don’t want to replace all your internal doors, then simply re-painting the doors and replacing the handles is a good way t...</p><a href="#" title="View Choosing Handles For Your Internal Doors" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Which Internal Door Should I Choose?"><img src="" alt="Which Internal Door Should I Choose? Image"></a>
						<h4 style="height: 64.8px;"><a href="#" title="View Which Internal Door Should I Choose?">Which Internal Door Should I Choose?</a></h4>
						<p>The humble door is one of the most under-appreciated parts of interior design. A good door will act as an accent to the rest of your interior décor, while also serving several important functio...</p><a href="#" title="View Which Internal Door Should I Choose?" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Fitting an Internal Door Frame"><img src="img/thumb (5).jpg?src=img/thumb (6).jpg&amp;w=280&amp;h=150" alt="Fitting an Internal Door Frame Image"></a>
						<h4 style="height: 64.8px;"><a href="#" title="View Fitting an Internal Door Frame">Fitting an Internal Door Frame</a></h4>
						<p>If you are planning on renovating a room, then you should not overlook the doorway. The door is more than just a thing that keeps heat in and noise out, it serves as a form of decoration too. A nice l...</p><a href="#" title="View Fitting an Internal Door Frame" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Can Internal Doors be Cut to Size? And other Frequently Asked Questions"><img src="" alt="Can Internal Doors be Cut to Size? And other Frequently Asked Questions Image"></a>
						<h4 style="height: 64.8px;"><a href="#" title="View Can Internal Doors be Cut to Size? And other Frequently Asked Questions">Can Internal Doors be Cut to Size? And other Frequently Asked Questions</a></h4>
						<p>When it comes to doors, both internal and external, we’ve a considerable body of expertise to draw upon. And we put that expertise to good use, answering customer questions about all things door...</p><a href="#" title="View Can Internal Doors be Cut to Size? And other Frequently Asked Questions" class="btn">Read More</a>
					</div>
				</div>
				<div class="c_25">
					<div class="inner">
						<a href="#" title="View Can Internal Doors be Cut to Size? And other Frequently Asked Questions"><img src="" lt="Can Internal Doors be Cut to Size? And other Frequently Asked Questions Image"></a>
						<h4 style="height: 64.8px;"><a href="#" title="View Can Internal Doors be Cut to Size? And other Frequently Asked Questions">Can Internal Doors be Cut to Size? And other Frequently Asked Questions</a></h4>
						<p>When it comes to doors, both internal and external, we’ve a considerable body of expertise to draw upon. And we put that expertise to good use, answering customer questions about all things door...</p><a href="#" title="View Can Internal Doors be Cut to Size? And other Frequently Asked Questions" class="btn">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection