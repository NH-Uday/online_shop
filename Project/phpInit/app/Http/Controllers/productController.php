<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\User;

class productController extends Controller
{
    public function show(){
    	return view('product-details');
    }

    public function auth($id = null, Request $req){
		
		if( $req->session()->has('id') ){
			
			$Unvisit = DB::table('tbl_prod_visits')
					-> where('userid',$req->session()->get('id'))
					-> where('prod_id',$id)
					-> delete();
			
			$visitCount = DB::table('tbl_prod_visits')
					   -> where('userid', $req->session()->get('id'))
					   -> get();
					   
			// if(count($visitCount) > 4){
				// $Unvisit = DB::table('tbl_prod_visits')
						// -> where('userid',$req->session()->get('id'))
						// -> delete();
			// }
			
			$Visit = DB::table('tbl_prod_visits')->insert([
						'userid'	=> $req->session()->get('id'),
						'prod_id'	=> $id
						]);
			
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
			
			$CartData = DB::table('tbl_cart')
					  ->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')
					  ->where('tbl_cart.user_id',$req->session()->get('id'))
					  ->get();
			
			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('/product-details',['prodData'=>$product, 'stock'=>$stock, 'relatedProduct'=>$relatedProduct, 'userData'=>$userData, 'historyData'=>$historyData, 'CartData'=>$CartData, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData])->with(compact('product','stock','relatedProduct'));
			
		}else{
			
			$product = DB::table('tbl_prod_details')
                    ->where('prod_id', $id)->first();

            $stock = DB::table('tbl_prod_details')
                    ->where('prod_id', $id)->sum('prod_qty');

            $relatedProduct = DB::table('tbl_prod_details')
            		->where('prod_id','!=',$id)->where(['prod_cat'=>$product->prod_cat])->get();

			$SiteData = DB::table('tbl_sitedata')
					  ->get();
					  
			$mydate=Carbon::now();
			$hour=$mydate->format("H:i:s");
			$TimeData = array("Hour"=>$hour);
			
			return view('/product-details',['stock'=>$stock, 'prodData'=>$product, 'relatedProduct'=>$relatedProduct, 'SiteData'=>$SiteData, 'TimeData'=>$TimeData])->with(compact('product','stock','relatedProduct'));
			
		}	   	
    }
	
	public function AddCart(Request $req){
		
		if( $req->session()->has('id') ){
			
			$status = DB::table('tbl_cart')
				   -> where('user_id',$req->session()->get('id'))
				   -> where('prod_id',$req->pid)
				   -> first();
			
			if(!$status){
				$status1= DB::table('tbl_cart')->insert([
						'user_id'	=> $req->session()->get('id'),
						'prod_id'	=> $req->pid,
						'prod_quantity'	=> '1'
						]);
				
				if(!$status1){
					
				}else{
					echo "<a class='add-cart' href=''><span style='color:lime;'><i class='fa fa-shopping-cart'> Added to Cart.</i></span></a>";
				}
			}else{
				echo "<a class='add-cart' href=''><span style='color:green;'><i class='fa fa-shopping-cart'> Already Added to Cart.</i></span></a>";
			}
			
			
		}else{
			
			return redirect('/login');
		}	   	
    }
	
	public function QtyChange($pid, $newqty, Request $req){
		
		$siteUpdate  = DB::table('tbl_cart')
					-> where('user_id', $req->session()->get('id'))
					-> where('prod_id', $pid)
					-> update(['prod_quantity'=>$newqty]);
    }
	
	public function DelCart($pid, Request $req){
		
		if( $req->session()->has('id') ){
			
			$status = DB::table('tbl_cart')
				   -> where('user_id',$req->session()->get('id'))
				   -> where('prod_id',$pid)
				   -> delete();
			
			if(!$status){
				
			}else{
				$CartData = DB::table('tbl_cart')->leftJoin('tbl_prod_details','tbl_cart.prod_id','=','tbl_prod_details.prod_id')->where('tbl_cart.user_id',$req->session()->get('id'))->get();
				$tabData = '';
				foreach($CartData as $dt)
				{
					$tabData = $tabData .
					'<tr class="table-info">
						<td class="produ">
							<a href="#"><img alt="" src="img/cart-1.jpg"></a>
						</td>
						<td class="namedes">
							<h2><a href="/product-details/'.$dt->prod_id.'">'.$dt->prod_name.'</a></h2>
							<p>'.$dt->prod_details.'</p>
						</td>
						<td class="unit">
							<h5>$'.$dt->prod_MRP_price.'</h5>
						</td>
						<td class="quantity">
							<div class="cart-plus-minus">
								<input type="text" value="1" name="qtybutton" class="cart-plus-minus-box">
							</div>
						</td>
						<td class="valu">
							<h5>$'.$dt->prod_quantity * $dt->prod_MRP_price.'</h5>
						</td>
						<td class="acti">
							<a><i class="fa fa-trash-o" onclick="DelCart('.$dt->prod_id.')"></i></a>
						</td>
					</tr>';
				}
				echo $tabData;
			}
			
			
		}else{
			
			return redirect('/login');
		}	   	
    }
	
	public function CartClear(Request $req){
		
		$status = DB::table('tbl_cart')
			   -> where('user_id',$req->session()->get('id'))
			   -> delete();
		return redirect('/ProductCart');
    }
	
	public function DelWish($pid, Request $req){
		
		if( $req->session()->has('id') ){
			
			$status = DB::table('tbl_wishlist')
				   -> where('user_id',$req->session()->get('id'))
				   -> where('prod_id',$pid)
				   -> delete();
			
			if(!$status){
				
			}else{
				$WishData = DB::table('tbl_wishlist')->leftJoin('tbl_prod_details','tbl_wishlist.prod_id','=','tbl_prod_details.prod_id')->where('tbl_wishlist.user_id',$req->session()->get('id'))->get();
				$tabData = '';
				foreach($WishData as $dt)
				{
					$tabData = $tabData .
					'<tr class="table-info">
						<td class="produ">
							<a href="#"><img alt="" src="img/cart-1.jpg"></a>
						</td>
						<td class="namedes">
							<h2><a href="/product-details/'.$dt->prod_id.'">'.$dt->prod_name.'</a></h2>
							<p>'.$dt->prod_details.'</p>
						</td>
						<td class="unit">
							<h5>$'.$dt->prod_MRP_price.'</h5>
						</td>
						<td class="valu">
							<a class="add-to-cart"><i class="fa fa-shopping-cart" onclick=""> Add to Cart </i></a>
							<p id="sp-{{$dt->prod_id}}"></p>
						</td>
						<td class="acti">
							<a><i class="fa fa-trash-o" onclick="DelWish('.$dt->prod_id.')"></i></a>
						</td>
					</tr>';
				}
				echo $tabData;
			}
			
			
		}else{
			
			return redirect('/login');
		}	   	
    }
	
	public function AddWish(Request $req){
		
		if( $req->session()->has('id') ){
			
			$status = DB::table('tbl_wishlist')
				   -> where('user_id',$req->session()->get('id'))
				   -> where('prod_id',$req->pid)
				   -> first();
			
			if(!$status){
				$status1= DB::table('tbl_wishlist')->insert([
						'user_id'	=> $req->session()->get('id'),
						'prod_id'	=> $req->pid
						]);
				
				if(!$status1){
					
				}else{
					echo "<a class='add-cart' href=''><span style='color:orange;'><i class='fa fa-shopping-cart'> Added to Wishlist.</i></span></a>";
				}
			}else{
				echo "<a class='add-cart' href=''><span style='color:orange;'><i class='fa fa-shopping-cart'> Already Added to Wishlist.</i></span></a>";
			}
			
			
		}else{
			
			return redirect('/login');
		}	   	
    }
}
