<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Response;
use Session;
use App\User;
use App\comment;
class userlogin extends Controller
{
       public function signup(Request $request){
       	$input =  $request->except(['_token','option','location','updated_at','created_at']);
       	$values = User::get();
           		
       		foreach($values as $value){
       			if($value['email']==$input['email']){
       				return Response::json(array(
                    'error' => true,
                    'data'   => 'You have already registered with this email ID'
                ));

       			}else if($value['username']==$input['username']){
       				return Response::json(array(
                    'success' => false,
                    'data'   => 'The username already exists'
                ));
       			}
       		}
       		User::create($input);
       		return Response::json(array(
                    'success' => true,
                    'data'   => 'Registration complete'
                ));
       	}

       	public function login(Request $request){
       		       	$values = User::get();
$input =  $request->except(['_token','option','location','updated_at','created_at']);
       		$status = 0;
       		foreach($values as $value){
       			if($value['username']==$input['username']){
       				$status=1;
       			}
       		}
       		if($status == 0){
       			return Response::json(array(
                    'success' => false,
                    'data'   => 'The username does not exist'
                ));
       		}

       		$correctpwd = User::where('username',$input['username'])->get()[0];
       		
       		if($correctpwd["password"] == $input['password']){
       			$request->session()->put('name', $input['username']);
       			return Response::json(array(
                    'success' => true,
                    'data'   => 'Successfully Logged in'
                ));
       		}else{
       			return Response::json(array(
                    'success' => false,
                    'data'   => 'Password is incorrect'
                ));
       		}
       
       	 
       }
       public function logout(){
       	Session::flush();
       	return redirect('/');
       }

      public function addcomments($refid, Request $request){
      	// echo $refid;
      	$username = $request->session()->get('name', 'null');
      	// echo $username;
      	 $input = $request->except('_token');
      	// echo $input['comments'];
      	comment::insert(['refid' => $refid, 'username'=> $username, 'comments' => $input['comments']]);
      	return redirect('/details/'.$refid);

      }
}
