<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use DB;
use Illuminate\Support\Facades\Input;

class PlacesController extends Controller
{
    //
    public function index(){
    	 $user = DB::select("select * from users");
    
    	return view('home');
         // return 

    	// return Response::json([
    	// 	'messages'=>'Error'
    	// ],401);
    }
    public function store(){
        // $user = DB::select("select * from users where user_name = ? && user_pass = ?" , [$request->input('username')
     //                                                                                    ,$request->input('password')]);

        $username = Input::get('username');
        $password = Input::get('password');
        $query = DB::insert('insert into users (user_name,user_pass) value(?,?)',[$username,$password]);

    	// if(count($user)>0){
     //        return Response::json([
     //            'message' => 'Successfully Login'
     //        ],200);
     //    }else{
     //        return Response::json([
     //            'message' => 'Unauthorized Personel'
     //        ],401);
     //    }
        return redirect()->action('PlacesController@index');
    }

    public function show(){
        // echo $request->token;
    	// $user = DB::select("select * from users where user_id = ? ",[$ids])->first()->user_name;
        // $user = DB::table('users')->where('user_id','=',$ids)->first()->user_pass;
    	// return Response::json([
     //        'body' => view('about')->render()
     //    ]);  
        return Input::get('username');
    	// if(!$user){
    	// 	return Response::json([
    	// 		'message' => 'User not Available'
    	// 	],401);
    	// }

    	//  return Response::json([
    	//  	'data'=> $user
    	//  ]);
    }

}
