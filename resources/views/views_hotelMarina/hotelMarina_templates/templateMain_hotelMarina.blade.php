<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0, user-scalable=no">
	<title>@yield('title')| Hotel Marina</title>
	<link rel="stylesheet" type="text/css" href="{{asset('media/bootstrap/css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('media/bootstrap/css/bootstrap-datepicker3.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('media/bootstrap/css/bootstrap-select.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/template.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('css/header.css')}}"> -->
	<link rel="stylesheet" type="text/css" href="{{asset('css/carousel.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">		
</head>
<body>
	<header class="headerTemplate">
		@yield('header')		
	</header>	
	<div class="containerTemplate">
    	@yield('content')
    </div>
	<footer class="footerTemplate">
		@yield('footer')		
	</footer>	
	<script src="{{asset('media/bootstrap/js/jquery.js')}}"></script>
	<script src="{{asset('media/bootstrap/js/bootstrap.js')}}"></script>
	<script src="{{asset('media/bootstrap/js/carousel.js')}}"></script>
	<script src="{{asset('media/bootstrap/js/bootstrap-datepicker.js')}}"></script>
	<!-- <script src="{{asset('media/bootstrap/js/bootstrap-dropdown.js')}}"></script> -->
	<script>
	    $(document).ready(function(){
	      var date_input=$('input[name="date"]'); //our date input has the name "date"
	      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
	      var options={
	        format: 'mm/dd/yyyy',
	        container: container,
	        todayHighlight: true,
	        autoclose: true,
	      };
	      date_input.datepicker(options);
	    })
	</script>
</body>
</html>
