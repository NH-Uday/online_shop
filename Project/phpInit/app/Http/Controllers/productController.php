<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\User;

class productController extends Controller
{
    public function show(){
    	return view('product-details');
    }

    public function auth($id = null){
    	$product = DB::table('tbl_prod_details')
                    ->where('prod_id', $id)->first();
              return view('/product-details',['prodData'=>$product])->with(compact('product'));     
    }
}
