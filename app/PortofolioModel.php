<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortofolioModel extends Model
{
    //
    public $table = 'portofolio';

    public $timestamps = false;

    public function kategori()
	{
		return $this->hasOne('App\CategoryModel', 'id', 'id_kategori');
	}

}
