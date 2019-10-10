<!DOCTYPE html>
<html>
<head lang="en">
	
	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta http-equiv="X-UA-Compatible" content="ie=edge">

 	<title>Oneliner Design | Power Point Template</title>
 	<link rel="icon" href="{{ url('') }}/Assets/pict/oneliner.png">

 	<link rel="stylesheet" type="text/css" href="{{ url('') }}/Assets/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="{{ url('') }}/Assets/css/animate.css">
 	<link rel="stylesheet" type="text/css" href="{{ url('') }}/Assets/css/style.css">
 	<link rel="stylesheet" type="text/css" href="{{ url('') }}/Assets/css/main.css">
 	<link rel="stylesheet" type="text/css" href="{{ url('') }}/Assets/css/responsive.css">
 	<link rel="stylesheet" type="text/css" href="{{ url('') }}/Assets/css/ionicons/css/ionicons.min.css">
 	<link rel="stylesheet" type="text/css" href="{{ url('') }}/Assets/fontawesome/css/all.min.css">

 	<script type="text/javascript" src="{{ url('') }}/Assets/js/jquery-3.3.1.js"></script>
 	<script type="text/javascript" src="{{ url('') }}/Assets/js/bootstrap.min.js"></script>
 	<script type="text/javascript" src="{{ url('') }}/Assets/js/scroll.js"></script>
 	<script type="text/javascript" src="{{ url('') }}/Assets/js/parallax.js"></script>
 	<script type="text/javascript" src="{{ url('') }}/Assets/js/wow.min.js"></script>
 	<script type="text/javascript" src="{{ url('') }}/Assets/js/main.js"></script>
 	<script type="text/javascript" src="{{ url('') }}/Assets/ionicons/docs/ionicons.js"></script>

</head>

<body>
	
	{{-- Header Navigation --}}
	<div id="header-details">
		<div id="header-hide-detail" class="header-hide-detail">
			<div class="box-header-hide">
				
				<div class="container">
					
					<div class="logo-hide">
						<img src="Assets/pict/oneliner.png">
					</div>

					<div class="nav-right-hide">
						<ul>
							<li><a href="{{ url('/') }}">HOME</a></li>
							<li><a href="{{ url('template') }}">TEMPLATES</a></li>
							<li><a href="{{ url('category') }}">CATEGORY</a></li>
							<li><a href="{{ url('about') }}">ABOUT</a></li>
							<li><a href="{{ url('contact') }}">CONTACT</a></li>
							<li><span><ion-icon name="menu"></ion-icon></span></li>
						</ul>
					</div>
					
					<div class="clear"></div>

				</div>
			</div>
		</div>
	</div>

	{{-- Content Include --}}
	@yield('content')

	{{-- Footer Section --}}
	<div class="footer">
	    <div class="container">
	    	
	    	<div class="logo-footer">
		    	<img src="Assets/pict/oneliner.png">
		    	<p><span style="color: #D30404">ONELINER</span> DESIGN</p>
		    </div>
		    
		    <div class="nav-footer">
		     	<ul>
	     			<li><a href="{{ url('/') }}">HOME</a></li>
			        <li><a href="{{ url('/template') }}">TEMPLATES</a></li>
			        <li><a href="{{ url('/about') }}">ABOUT</a></li>
			        <li><a href="{{ url('/contact') }}">CONTACT</a></li>	
	     		</ul>
		    </div>
		    
		    <div class="lorem-footer">
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			    consequat. Duis aute irure dolor in reprehenderit.</p>
		    </div>
		    
		    <div class="copyright-footer">
		      	<hr>
		      	<p>Copyrights &copy; <?= date('Y'); ?> Oneliner Design | All Rights Reserved</p>
		    </div>
	    	
	    </div>
	</div>

</body>
</html>