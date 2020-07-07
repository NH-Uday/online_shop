<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Validator;

class accountController extends Controller
{
    public function show(){
    	return view('account');
    }

    public function account($id = null, Request $req){
    	if( $req->session()->has('id') ){
    		$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();

    	return view('account')->with(compact('userData'));
    	}
    	else{
    		$req->session()->flash('msg', 'invalid username/password');
    	}
    }

	public function updateCheck(Request $req){

		$update= DB::table('users')->where('userid', $req->session()->get('id'))->update([
				'username'=> $req->username,
				'email'=> $req->email,
				'contact'=> $req->contact,
				'address'=> $req->address,
				'type'=> 'user',
				'company'=>'N/A'
				]);
		if(!$update){
			return redirect("/account");
		}else{
			return redirect()->back()->with('flash_message_success','Your information is successfully updated');
		}
    }
}
