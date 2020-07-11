<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\feedback;
use Validator;

class contactController extends Controller
{
    public function show($id = null, Request $req){
    	
    	if( $req->session()->has('id') ){
    		$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
						return view('contact')->with(compact('userData'));
			$SiteData = DB::table('tbl_sitedata')
					 -> get();
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			return view('contact')->with(compact('userData','SiteData','TimeData','CartData'));
    	}
    	else{
    		$SiteData = DB::table('tbl_sitedata')
					 -> get();
    		return view('contact')->with(compact('SiteData'));
    	}
    }

    
    public function feedback(){
		$feedbackPost= DB::table('tbl_user_feedback')->insert([
				'userid'=> $req->session()->get('id'),
				'feedback'=> $request->feedback,
				]);

		if(!$feedbackPost){
			return redirect("/contact");
		}else{
			return redirect("/contact");
		}
	}
}
