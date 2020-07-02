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

    public function auth($id = null, Request $req){
		
		if( $req->session()->has('id') ){
			
			$userData = DB::table('users')
						->where('userid', $req->session()->get('id'))
						->first();
									
			$historyData=DB::table('tbl_prod_visits')
						->leftJoin('tbl_prod_details','tbl_prod_visits.prod_id','=','tbl_prod_details.prod_id')
						->where('tbl_prod_visits.userid', $req->session()->get('id'))
						->get();
			
			$product = DB::table('tbl_prod_details')
                    ->where('prod_id', $id)->first();

            $stock = DB::table('tbl_prod_details')
                    ->where('prod_id', $id)->sum('prod_qty');

            $relatedProduct = DB::table('tbl_prod_details')
            		->where('prod_id','!=',$id)->where(['prod_cat'=>$product->prod_cat])->get();


			return view('/product-details',['prodData'=>$product, 'stock'=>$stock, 'userData'=>$userData, 'historyData'=>$historyData])->with(compact('product','stock','relatedProduct'));
			
		}else{
			
			$product = DB::table('tbl_prod_details')
                    ->where('prod_id', $id)->first();

            $stock = DB::table('tbl_prod_details')
                    ->where('prod_id', $id)->sum('prod_qty');

            $relatedProduct = DB::table('tbl_prod_details')
            		->where('prod_id','!=',$id)->where(['prod_cat'=>$product->prod_cat])->get();


			return view('/product-details',['stock'=>$stock, 'prodData'=>$product])->with(compact('product','stock','relatedProduct'));
			
		}	   	
    }
}
