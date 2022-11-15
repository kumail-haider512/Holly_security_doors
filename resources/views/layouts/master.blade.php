<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>@yield('title') | Holly Security Door</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css"/>
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div>
		<div id="container">
			<!-- Header -->
			@include('front.component.header')

			@yield('content')

			<!-- Footer -->
			@include('front.component.footer')
		</div>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
	<script>
    @if(session('success'))
	    toastr.success("{{ session('success') }}");
	@elseif(session('error'))
	    toastr.error("{{ session('error') }}");
	@endif
	</script>
	<script>
	    toastr.options = {
	        "timeOut": "10000",
	    }
	</script>
	<script type="text/javascript">
		// $(document).on('click','.cat',function(){
		// 	alert("hh");
		// })
		$(document).ready(function(){

			$(".inner_content h5").click(function(e){
				var a = $(this).next(".answer");
				
				$(".answer").not(a).hide();
				$(".inner_content h5").not(this).removeClass("active");
				$(a).toggle();
				$(this).toggleClass("active");
			})
		});	

	</script>
	@yield('js')
</body>
</html>