<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\User;

use Validator;

class AddProductController extends Controller
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
			
			return view('addDetails')->with(compact('userData','SiteData','TimeData','CartData'));
    	}
    	else{
    		$req->session()->put('msg', 'Login First Please !');
			return redirect('/login');
    	}
    }
	
	public function Add(Request $req){
    	if( $req->session()->has('id') ){
    		
			$userData = DB::table('users')
					 -> where('userid', $req->session()->get('id'))
					 -> first();
			
			$Validation = Validator::make($req->all(), [
				'pname'   => 'required',
				'pcat'    => 'required',
				'pqty'    => 'required',
				'psell'   => 'required',
				'pmrp'    => 'required',
				'pdetail' => 'required'
			]);

			if($Validation->fails()){
				return back()
					->with('errors', $Validation->errors())
					->withInput();
			}
			
			if($req->pshop==null){
				$shopname = $userData->username;
			}else{
				$shopname = $req->pshop;
			}
			
			$status1= DB::table('tbl_prod_details')->insert([
					'prod_id'           => null,
					'prod_name'         => $req->pname,
					'prod_details'      => $req->pdetail,
					'prod_MRP_price'    => $req->pmrp,
					'prod_SELLER_price' => $req->psell,
					'prod_qty'          => $req->pqty,
					'created_date'      => Date('yy-m-d h:i:s'),
					'prod_shop'         => $shopname,
					'prod_cat'          => $req->pcat
					]);
			
			$pid = DB::table('tbl_prod_details')->orderBy('prod_id','desc')->value('prod_id');
				
			if($req->hasFile('pimg'))
			{
				$file = $req->file('pimg');
				$file->move('img/shop',$pid.'.'.$file->getClientOriginalExtension());
				$imageLink = $pid.'.'.$file->getClientOriginalExtension();
				
				$imageUpdate = DB::table('tbl_prod_details')
							-> where('prod_id', $pid)
							-> update(['prod_image'=>$imageLink]);
			}
			
			if(!$status1){
				$req->session()->put('msg', 'Product Insertion Failed !');
				return redirect('/addDetails');
			}else{
				return redirect('/product-details/'.$pid);
			}
    	}
    	else{
    		$req->session()->put('msg', 'Login First Please !');
			return redirect('/login');
    	}
    }
}
