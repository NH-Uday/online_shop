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
    		$req->session()->put('msg', 'Login First Please !');
			return redirect('/login');
    	}
    }

	public function updateCheck(Request $req){
		$userData = DB::table('users')
				 -> where('userid', $req->session()->get('id'))
				 -> first();
						
		$update= DB::table('users')->where('userid', $req->session()->get('id'))->update([
				'username'=> $req->username,
				'email'=> $req->email,
				'contact'=> $req->contact,
				'address'=> $req->address,
				'type'=> $userData->type,
				'company'=>'N/A'
				]);
		if(!$update){
			$req->session()->put('msg', 'Information Update Failed !');
			return redirect('/profile');
		}else{
			$req->session()->put('msg', 'Information Successfully Updated !');
			return redirect('/profile');
		}
    }
	
	public function passCheck(Request $req){
		
		if( $req->session()->has('id') ){
    		$userChk  = DB::table('users')
					 -> where('userid', $req->session()->get('id'))
					 -> where('password', md5($req->pass))
					 -> first();
							
			if($userChk){
				if($req->pass1 == $req->pass2){
					$update = DB::table('users')
						   -> where('userid', $req->session()->get('id'))
						   -> update([
								'password'=> md5($req->pass1)]);
					if(!$update){
						$req->session()->put('msg', 'Information Update Failed !');
						return redirect('/profile');
					}else{
						$req->session()->put('msg', 'Password Information Update Complete !');
						return redirect('/profile');
					}
				}else{
					$req->session()->put('msg', 'Confirm Password Didnot Match !');
					return redirect('/profile');
				}
			}else{
				$req->session()->put('msg', 'Please Correct Your Old Password');
				return redirect('/profile');
			}
    	}
    	else{
    		$req->session()->flash('msg', 'invalid username/password');
			return redirect('/login');
    	}
    }
	
	public function proChange(Request $req){
		
		if($req->hasFile('proChange'))
		{
			$file = $req->file('proChange');
			$file->move('img/user',$req->session()->get('id').'.'.$file->getClientOriginalExtension());
			
			$update = DB::table('users')
				   -> where('userid', $req->session()->get('id'))
				   -> update([
						'image'=> $req->session()->get('id').'.'.$file->getClientOriginalExtension()]);
								
			$req->session()->put('msg', 'Picture Changed Successfully !');
			return redirect('/profile');
		}
    }
}
