<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        body{
            font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color:#333;
            text-align:left;
            font-size:18px;
            margin:0;
        }
        .container{
            margin:0 auto;
            margin-top:35px;
            padding:0px;
            width:700px;
            height:auto;
            background-color:#fff;
        }
        caption{
            font-size:28px;
            margin-bottom:15px;
        }
        table{
            border:1px solid #333;
            border-collapse:collapse;
            margin:0 auto;
            width:700px;
        }
        tr, th{
            padding-right:3px;
            border:1px solid #333;
            width:100px;
        }
        th{
            background-color: #ADD8E6;
        }
        .bg{
            background-color: #BC8F8F;
        }
        h4, p{
            margin:0px;
        }
        td{
            padding-left:3px;
            padding-right:3px;
            border-bottom:1px solid #333;
        }
        p.mix {
			border-style: dotted dashed solid double;
		}
    </style>
</head>
        @foreach($sales as $sls)
            @if ($id == $sls->NOTA_ID)
<body>
    <div class="container">
        <table>
            <caption>
                Shindi's Store 
            </caption>
            
            <thead>
                <tr>
                    <th colspan="6">Invoice <strong>#{{ $sls->NOTA_ID }}</strong></th>
                    <th>{{ $sls->NOTA_DATE }}</th>
                </tr>
                <tr>
                    <td colspan="4">
                        <h4>Store : </h4>
                        <p>Shindi's Store.<br>
                            JL. Menuju Masa Depan Lebih Baik No. 01<br>
                            Surabaya<br>
                            081343340102<br>
                            Shindi_Store@olshop.com
                        </p>
                    </td>
                    <td colspan="3">
                        <h4>Customer: </h4>
                        @foreach($customer as $cus)
                          @if (($sls->CUSTOMER_ID) == ($cus->CUSTOMER_ID))
                            <p>{{ $cus->FIRST_NAME }} {{ $cus->LAST_NAME }}<br>
                                {{ $cus->PHONE }}<br>
                                {{ $cus->EMAIL }} <br>
                                {{ $cus->STREET }} , {{ $cus->CITY}} <br>
                                {{ $cus->STATE}} , {{ $cus->ZIP_CODE}}
                            </p>
                            @endif
                        @endforeach
                
                    </td>
                </tr>
                <tr>
                    @foreach($user as $us)
                        @if (($sls->USER_ID) == ($us->USER_ID))
                            <th colspan="5">Employee <strong> : {{ $us->FIRST_NAME }} {{ $us->LAST_NAME }}</strong></th>
                            <th colspan="2">#{{ $us->USER_ID }}</th>
                        @endif
                    @endforeach
                </tr>
            </thead>
            <tbody>
                        <tr>
                            <th>Product Name</th>                                   
                            <th>Quantity</th> 
                            <th>Discount</th>
                            <th colspan="2">Price</th>
                            <th colspan="2">Total Price</th>
                        </tr>
            @foreach ($sales_detail as $salesdetail)
                @foreach($product as $pr)
                    @if ( ($sls->NOTA_ID) == ($salesdetail->NOTA_ID) )
                        @if ( ($salesdetail->PRODUCT_ID) == ($pr->PRODUCT_ID) )
                        <tr>
                            <td border="2px">{{ $pr->PRODUCT_NAME }}</td>    
                            <td border="2px" align="center">{{ $salesdetail->QUANTITY }}</td>
                            <td align="center">{{ number_format($salesdetail->DISCOUNT) }}</td>
                            <td width="5%">Rp</td>
                            <td border="2px"  align="right">{{ number_format($salesdetail->SELLING_PRICE) }}</td>
                            <td width="5%">Rp</td>
                            <td border="2px" align="right">{{ number_format($salesdetail->TOTAL_PRICE) }}</td>
                        </tr>
                        @endif
                    @endif
                @endforeach
            @endforeach
            </tbody>
            <tfoot>
                 @php 
                    $total=$sls->TOTAL_PAYMENT;
                    $subtotal=100/110*$total;
                    $pajak=$total-$subtotal;
                @endphp
                <tr>
                    <th colspan="5">Subtotal</th>
                    <td width="5%">Rp</td>
                    <td align="right">{{ number_format($subtotal) }}</td>
                </tr>
                <tr>
                    <th colspan="5">Tax 10%</th>
                    <td width="5%">Rp</td>
                    <td align="right">{{ number_format($pajak) }}</td>
                </tr>
                <tr>
                    <th colspan="5">Total Payement</th>
                    <td class="bg" width="5%">Rp</td>
                    <td class="bg" align="right">{{ number_format($sls->TOTAL_PAYMENT) }}</td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

                    @endif
        @endforeach
</html>