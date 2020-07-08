<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\User;

class CartController extends Controller
{
    public function Index(Request $req){
    	if( $req->session()->has('id') ){
			
			$CartData = DB::table('tbl_cart')->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')->where('tbl_cart.user_id',$req->session()->get('id'))->get();
			$userData = DB::table('users')->where('userid', $req->session()->get('id'))->first();
			$SiteData = DB::table('tbl_sitedata')-> get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('cart',['CartData'=>$CartData,'userData'=>$userData,'SiteData'=>$SiteData,'TimeData'=>$TimeData]);
			
		}else{
			
		}
    }
	
	public function checkout(Request $req){
    	$CartData = DB::table('tbl_cart')->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')->where('tbl_cart.user_id',$req->session()->get('id'))->get();
		$userData = DB::table('users')->where('userid', $req->session()->get('id'))->first();
		$SiteData = DB::table('tbl_sitedata')-> get();
				  
		$mydate=Carbon::now();
		$hour=$mydate->format("H:i:s");
		$TimeData = array("Hour"=>$hour);
		
		return view('checkout',['CartData'=>$CartData,'userData'=>$userData,'SiteData'=>$SiteData,'TimeData'=>$TimeData]);
		
    }

    
}
