@extends('layout')

@section('content')

	<div class="bg-detail">
		<div class="img-detail" data-parallax="scroll" data-image-src="Assets/pict/bg_details.jpg">
			<div class="container">
				<div class="text-detail">
					<p>Category Templates</p>
					<p><ion-icon name="home"></ion-icon> Home / Categories</p>
				</div>
			</div>
		</div>
	</div>

	<div id="cat">
    	<div class="background-cat">
      
    		<div class="img-category">
	        	<div class="content-cat">
	         
					<div class="container">
				        <div class="cat-item" style="flex-wrap: wrap;">
			          		@foreach($categorys as $category)
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
    		</div>
    	</div>
  	</div>

  	<div class="margin-cat"></div>

@endsection