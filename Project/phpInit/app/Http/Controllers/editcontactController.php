<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\User;

use Validator;

class editcontactController extends Controller
{
     public function show(Request $req){
    	if( $req->session()->has('id') ){
    		$userData = DB::table('users')
					 -> where('userid', $req->session()->get('id'))
					 -> first();
			$SiteData = DB::table('tbl_sitedata')
					 -> get();
			$CartData = DB::table('tbl_cart')
					 -> leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					 -> where('tbl_cart.user_id',$req->session()->get('id'))
					 -> get();
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('editcontact')->with(compact('userData','SiteData','TimeData','CartData'));
    	}
    	else{
    		$req->session()->put('msg', 'Login First Please !');
			return redirect('/login');
    	}
    }
}
