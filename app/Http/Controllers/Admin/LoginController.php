<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
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
                if($data->JABATAN == 0){
                    Session::put('admin',TRUE);
                    return redirect('index');
                }
                return redirect('PosIndex');
            }
            else{
                return redirect('login')->with('alert','Incorrect password !');
            }
        }
        else{
            return redirect('login')->with('alert','Incorrect email !');
         }
    }

    public function logout(){
        Session::flush();
        return redirect('login')->with('alert-success','You Have Been Signed Out');
    }


}
