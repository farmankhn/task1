<?php  namespace App\Http\Controllers;

class Base extends Controller {


	public function index(){

		return view('pages.index');
		//echo"Hello Farman Khan";
	}


	public function dbData(){

	}

	public function aboutUs(){

		echo"Abotu Us";
	}

} 