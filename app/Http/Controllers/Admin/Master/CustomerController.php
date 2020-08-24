<?php

namespace App\Http\Controllers\Admin\Master;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer = DB::table('customer')->get();
        if(!Session::get('login')){
            return redirect('login')->with('alert','You Must To Login First');
        }
        else{
        return view('Master/Customer/Customer',['customer'=>$customer]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('Master/Customer/Customer_input');
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
		DB::table('customer')->insert([
			'CUSTOMER_ID' => $request->idcus,
			'FIRST_NAME' => $request->firstcus,
			'LAST_NAME' => $request->lastcus,
			'PHONE' => $request->phonecus,
			'EMAIL' => $request->emailcus,
			'STREET' => $request->streetcus,
			'CITY' => $request->citycus,
			'STATE' => $request->statecus,
			'ZIP_CODE' => $request->zccus,
			'CUSTOMER_STATUS' => $request->cuss
		]);
		return redirect('CustomerIndex');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
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
		$customer = DB::table('customer')->where('customer_id',$id)->get();
		return view('Master/Customer/Customer_edit',['customer' => $customer]);
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
		DB::table('customer')->where('CUSTOMER_ID',$request->idcus)->update([
			'FIRST_NAME' => $request->firstcus,
			'LAST_NAME' => $request->lastcus,
			'PHONE' => $request->phonecus,
			'EMAIL' => $request->emailcus,
			'STREET' => $request->streetcus,
			'CITY' => $request->citycus,
			'STATE' => $request->statecus,
			'ZIP_CODE' => $request->zccus,
			'CUSTOMER_STATUS' => $request->cuss
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('CustomerIndex');
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
		DB::table('customer')->where('customer_id',$id)->delete();
		return redirect('CustomerIndex');
    }
}
