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
	
	<div id="header">
		<div id="header-hide" class="header-hide">
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
	<div class="clear"></div>

	<div id="header">

		<!-- Header and landing top -->
		<div class="landing-top">
			<div class="bg-top">
				<div class="container">
						
					<div class="content-landing-page">
						<div class="nav-lp">
								
							<div class="logo-lp">
								<div class="logo-anu">
									<img src="Assets/pict/oneliner.png">
									<p class="wow fadeInDown" data-wow-delay="1s">
										<span style="color: #D30404">ONELINER</span> DESIGN
									</p>
									<p class="wow fadeIn" data-wow-delay="1.5s">Power Point Template</p>
								</div>
								<div class="clear"></div>
							</div>

							<div class="nav-href-lp">
								<ul class="wow">
									<li class="wow fadeIn" data-wow-delay="1s"><a href="#portfolio">Templates</a></li>
									<li class="wow fadeIn" data-wow-delay="1.5s"><a href="#cat">Category</a></li>
									<li class="wow fadeIn" data-wow-delay="2s"><a href="{{ url('about') }}">About</a></li>
								</ul>
							</div>

						</div>
					</div>

					<div class="clear"></div>
				
					<div class="content-text-lp">
						<div class="text-lp">
							<div class="title-lp">
								<p class="wow fadeInDown" data-wow-delay="0.5s">Let's Try Our <br>Power Point Templates</p>
							</div>
							<div class="content-lp">
								<p class="wow fadeInUp" data-wow-delay="0.8s">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit.
								</p>
							</div>
							<div class="button-lp">
								<a href="#" class="wow fadeInUp" data-wow-delay="1.2s">Try it Now</a>
								<a href="#" class="wow fadeInUp" data-wow-delay="1.5s">Our Marketplace</a>
							</div>
							<div class="sosmed-icon" style="margin-top: 50px; margin-left: 0;color: #777">
								<span><ion-icon name="logo-instagram"></ion-icon></span>
								<span><ion-icon name="logo-dribbble"></ion-icon></span>
								<span><ion-icon name="logo-facebook"></ion-icon></span>
							</div>
						</div>
					</div>

					<div class="img-bg-banner">
						<img class="wow slideInRight" data-wow-delay="1.5s" src="Assets/pict/background.png">
					</div>

				</div>

					<div class="img-bg">
						<img class="wow slideInRight" data-wow-delay=".9s" src="Assets/pict/landing.png">
					</div>

			</div>
		</div>
	</div>
	<div class="clear"></div>

	<div id="portfolio">
		
		<!-- Content Portfolio -->
		<div class="content-portfolio">
			
			<div class="text-top-portfolio">
				<p class="wow slideInDown">New Templates Power Point</p>
				<p class="wow fadeIn" data-wow-delay="0.5s">Hand - Crafted Design to Get you Started</p>
			</div>

		</div>

		{{ csrf_field() }}
		<div class="container">
			<div id="post_data" class="portfolio-project">
				{{-- Portofolio Ajax --}}
			</div>
		</div>
	</div>

	<div id="cat">
    	<div class="background-cat">
      
    		<div class="img-category">
    			<div class="img-cat">
          			<hr>
        		</div>
	        	<div class="text-cat">
		          	<p class="wow fadeInDown">We Made and Show for You</p>
		          	<p class="wow fadeIn" data-wow-delay="0.5s">Best Quality Design</p>
		        </div>

	        	<div class="content-cat">
	         
					<div class="container">
				        <div class="cat-item">
			          		@foreach($categories as $category)
			      			<div class="img-content-cat wow fadeIn" data-wow-delay="0.3s" style="background-image: url('{{ url('Assets/pict_category/' . $category->gambar) }}')">
						              	<div class="content-hover-cat">
						                	<p>{{ $category->nama_kategori }}</p>
						                	<p>{{ $category->deskripsi_kategori }}</p>
						              	</div>
						            <div class="clear"></div>
					        </div>    			
			          		@endforeach
			        	</div>
        			</div>

        		</div>
        		<div class="clear"></div>

		        <div class="text-bottom-cat">
			          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		    	      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		        	  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		        </div>

		        <div class="button-cat">
		          	<a href="#">View More</a>
		        </div>

    		</div>

    	</div>
  	</div>

	<div class="light-footer">
		<div class="container">
			<div class="text-lf">
		    	<p>Are you like our project?</p>
		    	<p>Follow with us to get some info about new update portfolio</p>
		    </div>
		    <div class="button-sub">
		    	<a href="#">View on Marketplace</a>
		    </div>
		    <div class="clearfix"></div>
		</div>
	</div>

	<script>
	$(document).ready(function(){
	 
	 var _token = $('input[name="_token"]').val();

	 load_data('', _token);

	 function load_data(id="", _token)
	 {
	  $.ajax({
	   url:"{{ route('loadmore.load_data') }}",
	   method:"POST",
	   data:{id:id, _token:_token},
	   success:function(data)
	   {
	    $('#load_more_button').remove();
	    $('#post_data').append(data);
	   }
	  })
	 }

	 $(document).on('click', '#load_more_button', function(){
	  var id = $(this).data('id');
	  $('#load_more_button').html('<b>Loading...</b>');
	  load_data(id, _token);
	 });
	});
	</script>

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