<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Response;
class UserController extends Controller
{


	public function loginPage(Request $req){
		return view('login');
	}
    
    public function login(Request $req){
    	$username = $req->input('username');
    	$password = $req->input('password');
    	$user = DB::select("select * from users where user_name= ? and user_pass = ?",[$username,$password]);       
    	if(count($user)>0){
            DB::update('update users set token = ? where user_name = ?',[md5($username),$username]);
            $user[0]->token = md5($username);
            unset($user[0]->user_id);
            unset($user[0]->user_name);
            unset($user[0]->user_pass);
    		return Response::json(array("body"=>$user[0]),200);
            // return $req->token;
    	}else{
    		return Response::json([
    			'message' => 'UnAutorized'
    		],401);
    	}
    	
    }
    public function dashboard(){
        return view('admin-dashboard');
    }
    public function logout(Request $request)
    {
            return "logged out";
    }
}
