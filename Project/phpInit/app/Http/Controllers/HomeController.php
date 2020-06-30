<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Validator;

class HomeController extends Controller
{
	public function index(Request $req){
		
		if( $req->session()->has('id') ){
			
			$getData = DB::table('tbl_prod_details')->orderBy('created_date','desc')->get();
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			return view('index',['prodData'=>$getData, 'userData'=>$userData, 'historyData'=>$historyData]);
			
		}else{
			
			$getData = DB::table('tbl_prod_details')->orderBy('created_date','desc')->get();
			return view('index',['prodData'=>$getData]);
			
		}
    }
	
}
