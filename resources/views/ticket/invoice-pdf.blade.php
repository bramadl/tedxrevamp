<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEDxUniversitasBrawijaya 2021 | Payment Invoice</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    header {
      background: #101010;
      color: #FFFFFF;
      padding: 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    body {
      margin: 50px;
      color: #101010;
      font-family: 'Open Sans', sans-serif;
    }

    h1 {
      font-size: 2rem;
    }

    h2 {
      font-size: 1.5rem;
    }

    h2 span {
      color: #B82B2B;
    }

    table#user {
      width: 100%;
      margin: 50px 0;
    }

    table#user tr td {
      font-size: 1.25rem;
      font-weight: 300;
      padding: 1rem 0;
    }

    table#user tr td:last-child {
      text-align: right;
    }

    table#ticket {
      width: 100%;
      margin: 50px 0;
    }

    table#ticket tr td {
      font-size: 1.25rem;
      font-weight: 300;
      padding: 1rem 0;
      text-align: center;
    }
  </style>
</head>

<body onload="window.print()">
  <header>
    <img src="{{ asset('img/tedx.png') }}" width="200">

    <div>
      <h1>Invoice Pembayaran</h1>
      <h2><span>TEDx</span>UniversitasBrawijaya</h2>
    </div>
  </header>

  <table id="user">
    <tr>
      <td>Nama Pembeli</td>
      <td>{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</td>
    </tr>
    <tr>
      <td>Email Pembeli</td>
      <td>{{ Auth::user()->email_address }}</td>
    </tr>
    <tr>
      <td>Nomor Telepon</td>
      <td>{{ Auth::user()->phone_number }}</td>
    </tr>
    <tr>
      <td>Alamat Rumah</td>
      <td>{{ Auth::user()->street_address }}</td>
    </tr>
  </table>

  <hr>

  <table id="ticket">
    <tr>
      <th>Tipe Tiket</th>
      <th>Jumlah Tiket</th>
      <th>Metode Pembayaran</th>
      <th>Harga Tiket</th>
    </tr>
    <tr>
      <td>{{ $payment->ticket->type }}</td>
      <td>1</td>
      <td>{{ $payment->payment_method }}</td>
      <td><strong>Rp {{ number_format($payment->ticket->price,2,',','.') }}</strong></td>
    </tr>
  </table>
</body>

</html>