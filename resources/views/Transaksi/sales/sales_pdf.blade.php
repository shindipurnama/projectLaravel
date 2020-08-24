<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales</title>
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
        td, tr, th{
            padding:2px;
            border:1px solid #333;
            width:100px;
        }
        th{
            background-color: #f0f0f0;
        }
        h4, p{
            margin:0px;
        }
    </style>
</head>
<body>
    <div class="container">
        @foreach($sales as $sls)
        <table>
            <caption>
                Shindi's Store
            </caption>
            
            <thead>
                <tr>
                    <th colspan="4">Invoice <strong>#{{ $sls->NOTA_ID }}</strong></th>
                    <th>{{ $sls->NOTA_DATE }}</th>
                </tr>
                <tr>
                    <td colspan="3">
                        <h4>Store : </h4>
                        <p>Shindi's Store.<br>
                            JL. Menuju Masa Depan Lebih Baik No. 01<br>
                            Surabaya<br>
                            081343340102<br>
                            Shindi_Store@olshop.com
                        </p>
                    </td>
                    <td colspan="2">
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
                            <th colspan="4">Employee <strong> : {{ $us->FIRST_NAME }} {{ $us->LAST_NAME }}</strong></th>
                            <th>#{{ $us->USER_ID }}</th>
                        @endif
                    @endforeach
                </tr>
            </thead>
            <tbody>
                        <tr>
                            <th>Product Name</th>                                   
                            <th>Quantity</th> 
                            <th>Discount</th>
                            <th>Price</th>
                            <th>Total Price</th>
                        </tr>
            @foreach ($sales_detail as $salesdetail)
                @foreach($product as $pr)
                    @if ( ($sls->NOTA_ID) == ($salesdetail->NOTA_ID) )
                        @if ( ($salesdetail->PRODUCT_ID) == ($pr->PRODUCT_ID) )
                        <tr>
                            <td>{{ $pr->PRODUCT_NAME }}</td>    
                            <td>{{ $salesdetail->QUANTITY }}</td>
                            <td>Rp {{ number_format($salesdetail->DISCOUNT) }}</td>
                            <td>Rp {{ number_format($salesdetail->SELLING_PRICE) }}</td>
                            <td>Rp {{ number_format($salesdetail->TOTAL_PRICE) }}</td>
                        </tr>
                        @endif
                    @endif
                @endforeach
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                    <th colspan="4">Tax</th>
                    <td align="center">10%</td>
                </tr>
                <tr>
                    <th colspan="4">Total Payement</th>
                    <td>Rp {{ number_format($sls->TOTAL_PAYMENT) }}</td>
                </tr>
            </tfoot>
        </table>
        @endforeach
    </div>
</body>
</html>