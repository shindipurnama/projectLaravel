<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    //
	public function index_admin(){
		if(!Session::get('login')){
            return redirect('login')->with('alert','You Must To Login First');
        }
        else{
		return view('admin/home');
		}
	}

}
