<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\LoginRequest;

use Illuminate\Support\Facades\DB;

use App\User;

use Validator;

class LoginController extends Controller
{
    public function login(Request $req){
		return view('login');
    }
	
	public function check(Request $req){
		$user = DB::table('users')
                    ->where('email', $req->identity)
                    ->orWhere('username', $req->identity)
                    ->where('password', md5($req->pass))
                    ->first();
					
		$data = DB::table('users')
                    ->where('email', $req->identity)
                    ->value('userid');
					
    	if($user != null){
            
            $req->session()->put('email', $req->identity);
			$req->session()->put('id', $data);
    		
			return redirect('/');

    	}else{
            $req->session()->flash('msg', 'invalid username/password');
    		return redirect('/login');
    	}
    }
	
	public function register(Request $req){
    	return view('register');
    }
	
	public function registerCheck(Request $req){
		
    }
}
