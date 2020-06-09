<?php

namespace App\Http\Controllers\Admin\Master;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
		$product = product::all();
		return view('Master/Product/Product',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		$categories=DB::table('categories')->get();
		return view('Master/Product/Product_input',['categories'=>$categories]);
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
			DB::table('categories')->get();
			product::create([
			'PRODUCT_ID' => $request->idpr,
			'CATEGORY_ID' => $request->idcat,
			'PRODUCT_NAME' => $request->prname,
			'PRODUCT_PRICE' => $request->prprice,
			'PRODUCT_STOCK' => $request->prstock,
			'EXPLANATION' => $request->prex
		]);
		return redirect('ProductIndex');
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
        $categories=DB::table('categories')->get();
		$product = product::where('product_id',$id)->get();
		return view('Master/Product/Product_edit',['product' => $product, 'categories'=>$categories]);
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
        DB::table('categories')->get();
		product::where('PRODUCT_ID',$request->idpr)->update([
			'CATEGORY_ID' => $request->idcat,
			'PRODUCT_NAME' => $request->prname,
			'PRODUCT_PRICE' => $request->prprice,
			'PRODUCT_STOCK' => $request->prstock,
			'EXPLANATION' => $request->prex
		]);
		return redirect('ProductIndex');
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
		$product=product::where('product_id',$id)->delete();
		return redirect('ProductIndex');
    }
}
