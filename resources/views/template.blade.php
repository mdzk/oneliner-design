@extends('layout')

@section('content')

	<div class="bg-detail">
		<div class="img-detail" data-parallax="scroll" data-image-src="Assets/pict/bg_details.jpg">
			<div class="container">
				<div class="text-detail">
					<p>Templates Update</p>
					<p><ion-icon name="home"></ion-icon> Home / Templates</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		
		<div class="form-search">
			<form method="get">
				<input type="text" name="search" placeholder="Search Templates" class="search-form">
				<button><ion-icon name="search"></ion-icon></button>
			</form>
		</div>

		<div class="template-all">
			<div class="portfolio-project">

				@foreach($portfolioTemplates as $portfolioTemplate)
				<!-- Form Ajax -->
				<div class="project wow fadeInUp" data-wow-delay="0.3s">
					<div class="img" style="background: url('{{ url('Assets/pict_portfolio/' . $portfolioTemplate->thumbnail) }}');">
						<div class="box-show-project">
							<div class="title-project">
								<p>{{ $portfolioTemplate->nama_portfolio }}</p>
								<p class="view-project">
									<a href="#">
										<ion-icon name="search"></ion-icon>
										See Portfolio
									</a>
								</p>
							</div>
						</div>
					</div>
					<div class="content-right-project">
						<div class="desc-project">
							
							<div class="title-desc-project">
								<p>{{ $portfolioTemplate->nama_portfolio }} Template</p>
							</div>
							<div class="text-desc-project">
								<p>{!! substr(trim(strip_tags($portfolioTemplate->deskripsi_portfolio)), 0, 300) !!}....</p>
							</div>

							<div class="date-and-cat">
								<div class="date">
									<p><ion-icon name="time"></ion-icon> {{ $portfolioTemplate->tanggal_portfolio }} &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</p>
								</div>
								<div class="cat">
									<p><ion-icon name="list-box"></ion-icon> {{ $portfolioTemplate->kategori->nama_kategori }}</p>
								</div>							
							</div>
						</div>
					</div>
				</div>
				<div class="clear"></div>

				@endforeach

				<div class="button-load">
					{{ $portfolioTemplates->links() }}
				</div>
			</div>
		</div>

	</div>


@endsection