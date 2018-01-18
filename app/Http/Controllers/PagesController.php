<?php 

namespace App\Http\Controllers;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

/**
* 
*/
class PagesController extends BaseController
{
	
	public function home()
	{
		$name = "Patrick";
		return view('home')->with('name',$name);
	}

	public function about(){
		return view('about');
	}
}
?>