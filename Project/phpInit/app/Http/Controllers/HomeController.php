<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Validator;

class HomeController extends Controller
{
    public function index(Request $req){
		$getData = DB::table('tbl_prod_details')->get();
    	return view('index',['prodData'=>$getData]);
    }
	
}
