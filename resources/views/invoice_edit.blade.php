<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>INVOICE</title>
    
    <style>
	@page { margin-top: 0px; margin-bottom: 0px; }
	
    .invoice-box {
        max-width: 800px;
        margin-top: 0px;
        margin-bottom: 0px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
    }

    .invoice-box table {
        width: 100%;
        line-height: inherit;
        text-align: left;
    }

    .invoice-box table td {
        padding: 5px;
        vertical-align: top;
    }

    .invoice-box table tr td:nth-child(2) {
        text-align: left;
    }

    

    .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
    }


    .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
    }

    .invoice-box table tr.details td {
        padding-bottom: 20px;
    }

    .invoice-box table tr.item td{
        border-bottom: 1px solid #eee;
    }

    .invoice-box table tr.item.last td {
        border-bottom: none;
    }

    .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
    }

    @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
            width: 100%;
            display: block;
            text-align: center;
        }

        .invoice-box table tr.information table td {
            width: 100%;
            display: block;
            text-align: center;
        }
    }

    /** RTL **/
    .rtl {
        direction: rtl;
        font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
    }

    .rtl table {
        text-align: left;
    }

    .rtl table tr td:nth-child(2) {
        text-align: left;
    }

    .text-center {
        text-align: center;
        padding: 0px !important;
        margin: 0px !important;
    }

    </style>
</head>

<body>
    <div class="invoice-box">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <td class="text-center">
                            <b>VEGIE.AJA</b><br>
                            Jl.Pasundan 18, Nyomplong, Kec. Warudoyong<br>
							Kota Sukabumi, Jawa Barat <br>
                                www.vegieaja.com<br>
                                ---------------------------------------------------
                        </td>
                    </table>
                </td>
            </tr>

            <tr class="Informasi">
                <td colspan="3">
                    <table>
                        <tr>
                            <td >
                                Invoice #: {{$bukti->id}}<br>
                            Tgl: {{$bukti->created_at->format('d-m-Y')}}<br>
                            </td>
                            
                            <td class="text-right" style="width:20%">
                                {{$user}}<br>
                            </td>
                            
                        </tr>
                    </table>
                </td>
            </tr>

            <tr>
                <td colspan="3">
                    ---------------------------------------------------
                </td>
            </tr>
            @php
            $aa = 0;
            @endphp
            @for($i=0; $i < count($produk); $i++)
            <tr>
                <td style="width:15%">
                    {{$jumlah[$i]}}
                </td>
                <td>
                    {{$produk[$i]}}
                </td>

                <td>
                   Rp {{str_replace(',','.',number_format($harga[$i]*$jumlah[$i]))}}
                </td>
            </tr>
			@php
           	$aa += $harga[$i]*$jumlah[$i];
			@endphp
            @endfor
            <tr class="total">
                <td colspan="3">---------------------------------------------------</td>
            </tr>
            <tr class="total">
                <td colspan="2">TOTAL</td>

                <td>
                   {{'Rp '.str_replace(',','.',number_format($aa))}}
                </td>
            </tr>
		 	<tr class="total">
                <td colspan="3">---------------------------------------------------</td>
            </tr>
		 	<tr class="total">
                <td colspan="3">Catatan :</td>
            </tr>
			<tr class="total">
                <td colspan="3">{{$note}}</td>
            </tr>
        </table>
    </div>
</body>
</html>