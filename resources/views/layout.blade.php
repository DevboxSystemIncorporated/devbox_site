@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>DevBlox</title>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/font_styles.css" rel="stylesheet" >
		<link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light  sticky-top my_navbar">

	    <a class="navbar-brand" href="#"><img class="nav_logo" src="/images/logo_noborder.png"> <img class="nav_logo_name" src="/images/logo_name.png"></a>
	    
	    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	        <div class="my_nav_button">
	            <div></div>
	            <div></div>
	            <div></div>
	        </div>
	    </button>
	    
	        <div class="collapse navbar-collapse" id="navbarNav">
	            <ul class="navbar-nav my_navbar ml-auto" id="my_nav_links">
	                <!-- <ul class="navbar-nav my_navbar ml-auto" id="my_nav_links"> -->
	                <div class="form-inline" >
	                    <li class=" v-item active my_links">
	                        <a class="nav-link my_nav_link" href="#">Home <span class="sr-only">(current)</span></a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link my_nav_link" href="#">Services</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link my_nav_link" href="#">Contact</a>
	                    </li>
	                    <li class="nav-item">
	                        <a class="nav-link my_nav_link" href="#">About DevBlox</a>
	                    </li>
	                    
	                </div>
	            </ul>
	        </div>
	    </nav>

        
            @yield('home')
            @yield('services')
            @yield('about')
        
        <div class="contact_container">
        	@yield('contact')
        </div>


	<script src="/js/jquery-3.2.1.slim.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>

	<script>
		
		$(function(){	
			//IF .navbar-toggle is clicked, button animates, disables for seconds then becomes enabled again
			//this method prevents animation bugs in multiple clicks 
			var fewSeconds = .4;
			$(document).on('click','.navbar-toggler',function() {
			    
					$('.my_nav_button').toggleClass("is-active");

					var btn = $(this);
					btn.prop('disabled', true);
					setTimeout(function(){
					btn.prop('disabled', false);
					}, fewSeconds*1000);
 
			});
				
		})
	</script>
    </body>
</html>