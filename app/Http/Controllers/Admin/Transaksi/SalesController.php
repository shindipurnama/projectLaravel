<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        //tampilan tabel sales
        $user=DB::table('user')->get();
		$customer=DB::table('customer')->get();
		$categories=DB::table('categories')->get();
		$product=DB::table('product')->get();
        $sales = DB::table('sales')->get();
        $sales_detail = DB::table('sales_detail')->get();
		return view('Transaksi/sales/sales',['sales'=>$sales, 'sales_detail'=>$sales_detail]);
    }

    public function Index2()
    {
        //tampilan tabel detail sales
        $user=DB::table('user')->get();
		$customer=DB::table('customer')->get();
		$categories=DB::table('categories')->get();
		$product=DB::table('product')->get();
        $sales = DB::table('sales')->get();
        $sales_detail = DB::table('sales_detail')->get();
		return view('Transaksi/sales_detail/sales_detail',['sales'=>$sales, 'sales_detail'=>$sales_detail]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit()
    {
        //
		return 'ini halaman edit';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
		return 'ini halaman destroy';
    }
}
