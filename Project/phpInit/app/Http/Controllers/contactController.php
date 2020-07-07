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
    	}
    	else{
    		$req->session()->flash('msg', 'invalid username/password');
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
