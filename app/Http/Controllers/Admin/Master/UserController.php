<?php

namespace App\Http\Controllers\Admin\Master;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\user;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$user = user::all();
		return view('Master/User/User',['user'=>$user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('Master/User/User_input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
			user::create([
			'USER_ID' => $request->iduser,
			'FIRST_NAME' => $request->firstuser,
			'LAST_NAME' => $request->lastuser,
			'PHONE' => $request->phoneuser,
			'EMAIL' => $request->emailuser,
			'PASSWORD' => $request->passuser,
			'JOB_STATUS' => $request->jsuser
		]);
		return redirect('UserIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$user = user::where('user_id',$id)->get();
		return view('Master/User/User_edit',['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
		$user = user::where('user_id',$request->idus)->update([
			'FIRST_NAME' => $request->firstuser,
			'LAST_NAME' => $request->lastuser,
			'PHONE' => $request->phoneuser,
			'EMAIL' => $request->emailuser,
			'PASSWORD' => $request->passuser,
			'JOB_STATUS' => $request->jsuser
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('UserIndex');		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		$user = user::where('user_id',$id)->delete();
		return redirect('UserIndex');
    }
    
}

