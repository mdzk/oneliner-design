@extends('layout')

@section('content')

	<div class="bg-detail">
		<div class="img-detail" data-parallax="scroll" data-image-src="Assets/pict/bg_details.jpg">
			<div class="container">
				<div class="text-detail">
					<p>Contact</p>
					<p><ion-icon name="home"></ion-icon> Home / Contact</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		
		
		<div class="maps-dan-kontak">

			<div class="border-imac">
				<img src="Assets/pict/imac_pro.png">
				<div id="maps">
					<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15895.516217041442!2d105.32786038728025!3d-5.123183597658376!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x804b3b4145837ec4!2sSMK+Negeri+3+Metro!5e0!3m2!1sid!2sid!4v1523026667101" width="100%" height="360px" frameborder="0" style="border:0" allowfullscreen></iframe> -->
					<div class="clear"></div>
				</div>
			</div>


			@foreach($contacts as $contact) 

			<div class="kontak">
				<div class="alamat">
					<p><span class="ion-arrow-right-c"></span>&nbsp;&nbsp;
						We Are Address
					</p>
					<p>{{ $contact->alamat }}</p>
				</div>
				<div class="nomor-telepon">
					<p><span class="ion-arrow-right-c"></span>&nbsp;&nbsp;
						Phone Number
					</p>
					<p><span class="ion-ios-telephone"></span>&nbsp;&nbsp;
						{{ $contact->nomor_telepon }}
					</p>
					<p><span class="ion-ios-time-outline"></span>&nbsp;&nbsp;
						({{ $contact->jam_telepon }})
					</p>
				</div>
				<div class="email">
					<p><span class="ion-arrow-right-c"></span>&nbsp;&nbsp;
						E-mail
					</p>
					<p><span class="ion-ios-email"></span>&nbsp;&nbsp;
						{{ $contact->email }}
					</p>
					<p><span class="ion-ios-time-outline"></span>&nbsp;&nbsp;
						({{ $contact->jam_email }})
					</p>
				</div>
			</div>

			<div class="clear"></div>
			@endforeach
		</div>

		<div class="get-in-touch">
		    <hr>
		    <div class="text-git">
		    	<p>Get In Touch</p>
		    	<p>Keep Touch with Us</p>
		    </div>

		    <div class="form-git">
		     	<form method="post">
		        	<div class="clearfix"></div>

			        <div class="left-contact">
			        	<div class="email-form">
			          		<span><ion-icon name="mail"></ion-icon>&nbsp; E-mail </span><br>
			          		<input class="input-git" type="email" name="email" placeholder="Input Your E-mail">
			        	</div>
			        	<div class="clear"></div>

			        	<div class="name-form">
			          		<span><ion-icon name="person"></ion-icon>&nbsp; Name</span><br>
			          		<input class="input-git" type="text" name="name" placeholder="Input Your Name">
			        	</div>
			        	<div class="clear"></div>
			        </div>

			        <div class="right-contact">
			        	<div class="text-form">
			          		<span><ion-icon name="text"></ion-icon>&nbsp; Text</span><br>
			         	 	<textarea class="text-form-tx" name="text" placeholder="Write Some Text for Us"></textarea>
			        	</div>
			        </div>
			        <div class="clearfix"></div>
		        	<div class="button-submit">
		          		<button>Submit</button>
		        	</div>


		    	</form>
		    </div>
	  	</div>
		
	</div>

@endsection