<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\user;

class RegisterController extends Controller
{
    //
	public function index(){
		return view('admin/register');
	}

	public function store(Request $request)
    {
        //
			user::create([
			'USER_ID' => $request->iduser,
			'FIRST_NAME' => $request->firstuser,
            'LAST_NAME' => $request->lastuser,
			'USERNAME' => $request->username,
			'JABATAN' =>$request->jabatan,
			'PHONE' => $request->phoneuser,
			'EMAIL' => $request->emailuser,
			'PASSWORD' => $request->passuser,
			'JOB_STATUS' => $request->jsuser
		]);
		return redirect('login');
    }

}
