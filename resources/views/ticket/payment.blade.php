<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="{{ url('/ticket/payment') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
      <label for="first_name">Nama Depan</label>
      <input type="text" name="first_name" value="{{ $user->first_name }}" id="first_name" readonly>
    </div>
    <div>
      <label for="last_name">Nama Belakang</label>
      <input type="text" name="last_name" value="{{ $user->last_name }}" id="last_name" readonly>
    </div>
    <div>
      <label for="email_address">Alamat Email</label>
      <input type="email" name="email_address" value="{{ $user->email_address }}" id="email_address" readonly>
    </div>
    <div>
      <label for="phone_number">Nomor Telepon</label>
      <input type="text" name="phone_number" value="{{ $user->phone_number }}" id="phone_number" readonly>
    </div>
    <div>
      <label for="street_address">Alamat Rumah</label>
      <textarea name="street_address" readonly id="street_address" cols="30" rows="10">{{ $user->street_address }}</textarea>
    </div>
    <div>
      <label for="type">Tipe Tiket</label>
      <input type="text" name="type" value="{{ $ticket->type }}" id="type" readonly>
    </div>
    <div>
      <label for="price">Harga Tiket</label>
      <input type="text" name="price" value="{{ $ticket->price }}" id="price" readonly>
    </div>
    <div>
      <label for="payment_method">Metode Pembayaran</label>
      <select name="payment_method" id="payment_method">
        <option value="bca">BCA</option>
        <option value="mandiri">Mandiri</option>
      </select>
    </div>
    <div>
      <label for="payment_proof">Bukti Pembayaran</label>
      <input type="file" name="payment_proof" id="payment_proof">
    </div>
    <button type="submit">Lanjutkan Pembayaran</button>
  </form>
</body>

</html>