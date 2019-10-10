<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PortofolioModel;
use App\CategoryModel;

class LoadMoreController extends Controller
{
    //
    public function index() {

		$data = array(
			'categories' => CategoryModel::orderBy('id')->take(4)->get(),
		);

		return view('home', $data);
	}

	function load_data(Request $request) {
     	if($request->ajax()) {
      		if($request->id > 0) {
		       	$data = PortofolioModel::
		        	where('id', '<', $request->id)
		          	->orderBy('id', 'DESC')
		          	->limit(4)
		          	->get();
      		} else {
		       	$data = PortofolioModel::
		       		orderBy('id', 'DESC')
		         	->limit(4)
		          	->get();
      		}
      		
      		$output = '';
      		$last_id = '';
      
	      	if(!$data->isEmpty()) {
	       		foreach($data as $row) {
			        $output .= '
			        <div class="project wow fadeInUp" data-wow-delay="0.3s">
						<div class="img" style="background: url('. "'" .''.url('Assets/pict_portfolio/' . $row->thumbnail).''. "'" .');">
							<div class="box-show-project">
								<div class="title-project">
									<p>'. $row->nama_portfolio .'</p>
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
									<p>'. $row->nama_portfolio .' Template</p>
								</div>
								<div class="text-desc-project">
									<p>'. substr(trim(strip_tags($row->deskripsi_portfolio)), 0, 300) .'....</p>
								</div>

								<div class="date-and-cat">
									<div class="date">
										<p><ion-icon name="time"></ion-icon> '. $row->tanggal_portfolio .' &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</p>
									</div>
									<div class="cat">
										<p><ion-icon name="list-box"></ion-icon> '.$row->kategori->nama_kategori .'</p>
									</div>							
								</div>
							</div>


						</div>
					</div>
					<div class="clear"></div>

			        ';
			        $last_id = $row->id;
	       		}

		       	$output .= '
		       		<div id="load_more" class="button-project-more wow slideInDown" data-wow-delay="1s">
						<button data-id="'.$last_id.'" id="load_more_button" name="load_more_button" href="#">View More</button>
					</div>
		       	';
	      	} else {
	       		$output .= '
	       		<div id="load_more" class="button-project-more wow slideInDown" data-wow-delay="1s">
					<button id="load_more_button" name="load_more_button" disabled>No Data Found</button>
				</div>
	       		';
	      	}
	      	echo $output;
     	}
    }
}
