<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
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
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('account')->with(compact('userData','SiteData','TimeData','CartData'));
    	}
    	else{
    		$req->session()->flash('msg', 'invalid username/password');
			return redirect('/login');
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
