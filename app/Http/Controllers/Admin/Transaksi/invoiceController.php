<?php

namespace App\Http\Controllers\Admin\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class invoiceController extends Controller
{
    //

    public function Index()
    {
        //tampilan tabel sales
        $user=DB::table('user')->get();
		$customer=DB::table('customer')->get();
		$categories=DB::table('categories')->get();
		$product=DB::table('product')->get();
        $sales = DB::table('sales')->get();
        $sales_detail = DB::table('sales_detail')->get();
		return view('Transaksi/sales/invoice',['sales'=>$sales, 'sales_detail'=>$sales_detail, 'product'=>$product, 'user'=>$user, 'customer'=>$customer]);
    }

    public function generateInvoice($id)
    {
        //GET DATA BERDASARKAN ID
        $invoice = Invoice::with(['customer', 'detail', 'detail.product'])->find($id);
        //LOAD PDF YANG MERUJUK KE VIEW PRINT.BLADE.PHP DENGAN MENGIRIMKAN DATA DARI INVOICE
        //KEMUDIAN MENGGUNAKAN PENGATURAN LANDSCAPE A4
        $pdf = PDF::loadView('invoice.print', compact('invoice'))->setPaper('a4', 'landscape');
        return $pdf->stream();
    }
}


