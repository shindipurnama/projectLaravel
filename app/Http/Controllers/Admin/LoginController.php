<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
	public function index(){
		return view('admin/login');
	}
	
	public function proses(Request $req){
		$username = $req->input('username');
		$password = $req->input('password');
		return view('admin/admin');
	}

}
