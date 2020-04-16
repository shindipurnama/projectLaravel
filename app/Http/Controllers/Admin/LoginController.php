<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use App\user;

class LoginController extends Controller
{
    //
	public function index(){
		return view('admin/login');
	}
	
	public function proses(Request $req){
		$emailuser = $req->EMAIL;
		$password = $req->PASSWORD;
		$data = user::where('EMAIL',$emailuser)->first();
        if($data){
            if($data->PASSWORD == $password){
                Session::put('login',TRUE);
                return redirect('index');
            }
            else{
                return redirect('login')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('login')->with('alert','anda belum terdaftar');
            
        }
	}

}
