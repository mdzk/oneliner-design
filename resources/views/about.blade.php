@extends('layout')

@section('content')
	
	<div class="bg-detail">
		<div class="img-detail" data-parallax="scroll" data-image-src="Assets/pict/bg_details.jpg">
			<div class="container">
				<div class="text-detail">
					<p>About</p>
					<p><ion-icon name="home"></ion-icon> Home / About</p>
				</div>
			</div>
		</div>
	</div>


	@foreach($abouts as $about)

	<div class="about-content">
		<div class="text-about">
			
			<div class="text-top-about">
				<p>About Us</p>
			</div>
			<div class="text-desc-about">
				<p>{{ $about->deskripsi_about }}</p>
			</div>
			<div class="sosmed-icon">
				<div class="text-span">
					<p>Follow us</p>
				</div>
				<span><ion-icon name="logo-facebook"></ion-icon></span>
				<span><ion-icon name="logo-instagram"></ion-icon></span>
				<span><ion-icon name="logo-twitter"></ion-icon></span>
				<span><ion-icon name="logo-dribbble"></ion-icon></span>
			</div>
		</div>
		<div class="img-about">
			<img src="{{ url('Assets/pict/' . $about->gambar_about) }}">
		</div>
		<div class="clearfix"></div>
	</div>

	@endforeach


@endsection