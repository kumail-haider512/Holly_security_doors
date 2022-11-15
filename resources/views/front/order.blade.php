@extends('layouts.master')
@section('title','Order')
@section('css')
<style>
	.modal-backdrop.in
	{
		z-index: 1;
	}
	.payment-buttons
	{
		background-color: #e70037;
		padding: 10px 30px;
	    color: #fff;
	    font-size: 1.077rem;
	}
	.payment-buttons:hover
	{
		background-color: #000;
	}
	.modal-header {
	    background: #e70037;
	}
</style>
@section('content')
	<div id="content_wrap">
		<div class="content">
			<div id="breadcrumbs">
				<a href="{{route('home')}}" title="Holly Security Doors Home">Home</a> <span>〉</span> 
				<a href="{{route('product.checkout')}}" title="Checkout">Checkout</a> <span>〉</span> 
			</div>
			<div class="flex checkout_wrap">
				<div class="c_80 mobile_wide">
					<h4>Your Order Summary</h4>
				</div>
				<div class="c_20"></div>
					<div class="c_80 mobile_wide">
						<div class="flex cart summary_cart">
							<div class="c_20 non_mobile">
								<div class="inner table_title">Image
								</div>
							</div>

							<div class="c_40">
								<div class="inner table_title">Product
								</div>
							</div>

							<div class="c_20">
								<div class="inner table_title">Quantity
								</div>
							</div>

							<div class="c_20">
								<div class="inner table_title">Sub Total
								</div>
							</div>
							@foreach($order_product as $product)
							<div class="c_20 non_mobile">
								<div class="inner">
									<img src="{{asset($product->image)}}">
								</div>
							</div>
							<div class="c_40">
								<div class="inner">{{$product->name}}<br><strong>WHIUPVCBI18003L</strong>
								</div>
							</div>
							<div class="c_20">
								<div class="inner">
									<div class="flex cart_opts">
										<div class="c_20"><span>{{$product->quantity}}</span>
										</div>
										<div class="c_20"></div>
										<div class="c_50"></div>
									</div>
								</div>
							</div>
							<div class="c_20">
								<div class="inner">£6,236.00</div>
							</div>
							@endforeach
							<div class="c_100">
							<div class="flex">
								<div class="c_60 blank top_border non_mobile">
									<div class="inner">
										<h4>Billing Address:</h4>
										<p>
											<strong>Name:</strong> {{$order->name}}<br>
											<strong>Address:</strong> {{$order->address}},{{$order->city}} <br>{{$order->county}}<br><br>
											<strong>Email:</strong> {{$order->email}}<br><strong>Telephone:</strong> {{$order->telephone}}<br>
											<strong>Alternative Telephone:</strong> {{$order->telephone_alt}}
										</p>
										<h4>Collection from DE24 9HL</h4>
									</div>
								</div>
								<div class="c_40 m_100">
									<div class="flex">
										<div class="c_50 top_border brown_border">
											<div class="inner">
												<p class="bold">Subtotal</p>
											</div>
										</div>

										<div class="c_50 top_border brown_border">
											<div class="inner">
												<p class="amount">£{{$product->sum('price')}}</p>
											</div>
										</div>

										<div class="c_50 top_border">
											<div class="inner">
												<p class="bold">Collection from DE24 </p>
											</div>
										</div>

										<div class="c_50 top_border">
											<div class="inner">
												<p>£0.00</p>
											</div>
										</div>

										<div class="c_50 top_border total_tag">
											<div class="inner">
												<p class="bold large">Total</p>
											</div>
										</div>

										<div class="c_50 top_border total_tag">
											<div class="inner">
												<p class="large">£6,236.00</p>
											</div>
										</div>

									</div>

									<div class="mobile_only billing">
										<h4>Billing Address:</h4>
										<p>
											<strong>Name:</strong> {{$order->name}}<br>
											<strong>Address:</strong> {{$order->address}},{{$order->city}} <br>{{$order->county}}<br><br>
											<strong>Email:</strong> {{$order->email}}<br><strong>Telephone:</strong> {{$order->telephone}}<br>
											<strong>Alternative Telephone:</strong> {{$order->telephone_alt}}
										</p>
										<h4>Collection from DE24 9HL</h4>
									</div>
									<p class="right">
										<a href="" title="Proceed" class="btn proceed" style="margin: 13px;">Proceed to Payment</a>
									</p> 
									<form method="POST" action="{{route('confirm.payment')}}" id="form">
											@csrf
										<input type="hidden" name="amount_d" class="amount_d">
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                        <div class="modal-dialog" role="document">
	                                            <div class="modal-content">
	                                                <div class="modal-header">
	                                                    <h5 class="modal-title head" id="exampleModalLabel">Payment Detail</h5>
	                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                                        <span aria-hidden="true">&times;</span>
	                                                    </button>
	                                                </div>
	                                                <div class="modal-body">
	                                                    <div class="row mt-3">
	                                                    	<div class="col-md-12">
	                                                    		<img src="{{asset('img/logo-stripe.png')}}" style="margin-left: -7px;margin-bottom: 20px;">
	                                                    	</div>
	                                                        <div class="col-md-12">
	                                                            <div class="checkout_form group p-3">
					                                                <div class="form-group">
					                                                    <div id="card-element" class="field"></div>
					                                                    <div class="text-danger mt-3 mb-0 pb-0" id="card-errors" role="alert"></div>
					                                                </div>
					                                                <div id='submit' class="text-center">
					                                                    <button type="submit" class="btn btn-lg font-weight-bold btn-dark payment-buttons" id="purchase-btn">Confirm Payment</button>
					                                                </div>
					                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
									</form>
								</div>

							</div>

						</div>

					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
<script src="https://js.stripe.com/v3/"></script>
<script>
	$(document).ready(function(){
		var amount=$('.amount').text();
		new_amount=amount.replace('£','')
		$('.amount_d').val(new_amount);
	});
	$(document).on('click','.proceed',function(e){
		e.preventDefault();
		$('#exampleModal').modal('show');
	});
        const stripe = Stripe('{{ env('STRIPE_KEY') }}', { locale: 'en' });
        const elements = stripe.elements(); // Create an instance of Elements.
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"proxima-nova", "Helvetica Neue", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                    color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };
    
            const card = elements.create('card', {style: style, hidePostCode:true});
            const cardButton = document.getElementById('purchase-btn');
            
            const clientSecret = cardButton.dataset.secret;
            card.mount('#card-element');
            // Handle real-time validation errors from the card Element.
            card.on('change', function(event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });
            // Handle form submission.
            var form = document.getElementById('form');
            form.addEventListener('submit', function(event) {
                event.preventDefault();

                // Disable The submit button on click
                document.getElementById('purchase-btn').disabled = true;
               
                stripe.createPaymentMethod({
                    type: 'card',
                    card: card,
                    billing_details: {
                      // Include any additional collected billing details.
                      name: 'Nouman',
                    },
                  }).then(stripePaymentMethodHandler);          
            });

    
    function stripePaymentMethodHandler(result) {
  if (result.error) {
    // Show error in payment form
      toastr.error('Whoops! looks like issue in your card');
      document.getElementById('purchase-btn').disabled = false;
  } else {
     // console.log(result.paymentMethod.id);
    // Otherwise send paymentMethod.id to your server (see Step 4)
    fetch('{{route("intent")}}', {
      method: 'POST',
     headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-Token": $('input[name="_token"]').val()
      },
        credentials: "same-origin",
      body: JSON.stringify({
        payment_method_id: result.paymentMethod.id,
        amount: $('.amount_d').val()*100,
         
      })
    }).then(function(result) {
        console.log(result);
        
      // Handle server response (see Step 4)
      result.json().then(function(json) {
       
        var  payment_intent_id = null;
        
        handleServerResponse(json);
      })
    });
  }
}
    function handleServerResponse(response) {
      if (response.error) {  
          // $('#exampleModal').modal('hide');
          
    // Show error from server on payment form
      } else if (response.requires_source_action) {
        // Use Stripe.js to handle required card action 
              
          
        stripe.handleCardAction( 
          response.payment_intent_client_secret
        ).then(handleStripeJsResult);
      } else { 
             
      
      stripe.createToken(card).then(function(respo) {
                if (respo.error) {
                    // Inform the user if there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = respo.error.message;
                    // Enable The submit button
                    document.getElementById('purchase-btn').disabled = false;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler();
                }
            });
  }
}

function handleStripeJsResult(result) {
  if (result.error) { 
     
  } else {
    // The card action has been handled
    // The PaymentIntent can be confirmed again on the server
    var payment_intent_id=result.paymentIntent.id;
    fetch('intent', {
      method: 'POST',
      headers: {
        "Content-Type": "application/json",
        "Accept": "application/json",
        "X-Requested-With": "XMLHttpRequest",
        "X-CSRF-Token": $('input[name="_token"]').val()
      },
      credentials: "same-origin",
      body: JSON.stringify({
      payment_intent_id: result.paymentIntent.id,  
         
      })
    }).then(function(result) {
      // Handle server response (see Step 4)
      result.json().then(function(json) {
         console.log(json);
         if(json.success==true)
         {
            handleServerResponse(json);
         }
        
      })
    });
  }
}
            // Submit the form with the token ID.
function stripeTokenHandler() {
    // Insert the token ID into the form so it gets submitted to the server
    var form = document.getElementById('form');
    
        // Submit the form
        form.submit();
}

</script>
@endsection