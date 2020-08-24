<?php

namespace App\Http\Controllers\Admin\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = DB::table('categories')->get();
        if(!Session::get('login')){
            return redirect('login')->with('alert','You Must To Login First');
        }
        else{
        return view('Master/Categories/Categories',['categories'=>$categories]);
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
		return view('Master/Categories/Categories_input');
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
		DB::table('categories')->insert([
			'CATEGORY_ID' => $request->idcat,
			'CATEGORY_NAME' => $request->namecat,
			'CATEGORY_STATUS' => $request->cats
		]);
		return redirect('CategoriesIndex');
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
		$categories = DB::table('categories')->where('category_id',$id)->get();
		return view('Master/Categories/Categories_edit',['categories' => $categories]);
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
		DB::table('categories')->where('CATEGORY_ID',$request->idcat)->update([
		'CATEGORY_NAME' => $request->namecat,
		'CATEGORY_STATUS' => $request->cats	
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('CategoriesIndex');
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
		DB::table('categories')->where('category_id',$id)->delete();
		return redirect('CategoriesIndex');
    }
}
