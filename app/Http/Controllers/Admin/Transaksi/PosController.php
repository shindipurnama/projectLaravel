<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index()
    {
        //
		return view('Transaksi/Pos/Pos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $NOTA_ID=(DB::table('sales'));
        $user=DB::table('user')->get();
		$customer=DB::table('customer')->get();
		$categories=DB::table('categories')->get();
		$product=DB::table('product')->get();
		return view('Transaksi/Pos/Pos',[
            'NOTA_ID'=>$NOTA_ID,
            'user'=>$user,
            'customer'=>$customer,
            'categories'=>$categories, 
            'product'=>$product]);
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
      DB::table('sales')->insert([
			'NOTA_ID' => $request->notaid,
			'CUSTOMER_ID' => $request->idcus,
            'USER_ID' => $request->iduser,
            'NOTA_DATE' => $request->date,
            'TOTAL_PAYMENT' => $request->total
        ]);
        foreach($request['id'] as $key){  
        $NOTA_ID=(DB::table('sales')->max('NOTA_ID'));
        DB::table('sales_detail')->insert([
            'NOTA_ID' => $NOTA_ID,
            'PRODUCT_ID'=>$key,
            'QUANTITY' => $request->qty[$key],
            'SELLING_PRICE'=> $request->harga[$key],
            'DISCOUNT'=> $request->discount[$key],
            'TOTAL_PRICE'=>$request->subtotal[$key]
            ]);
        } 
        return redirect('PosIndex'); 
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
