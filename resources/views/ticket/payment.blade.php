@extends('layouts.payment')

@section('content')
<div class="_tedx_payment_title">
  <h1>Pembayaran Token</h1><br>
  <h1><span>TEDx</span>UniversitasBrawjiaya</h1>
</div>
<form
  action="{{ url('/ticket/payment') }}"
  method="POST"
  enctype="multipart/form-data" class="_tedx_payment_form_wrapper"
  data-scroll-section
>
  @csrf
  <div class="_tedx_payment_form_content">
    <div class="_tedx_payment_form_group firstName">
      <label for="first_name">Nama Depan</label>
      <input type="text" name="first_name" value="{{ $user->first_name }}" id="first_name" readonly>
    </div>
    <div class="_tedx_payment_form_group lastName">
      <label for="last_name">Nama Belakang</label>
      <input type="text" name="last_name" value="{{ $user->last_name }}" id="last_name" readonly>
    </div>
    <div class="_tedx_payment_form_group email">
      <label for="email_address">Alamat Email</label>
      <input type="email" name="email_address" value="{{ $user->email_address }}" id="email_address" readonly>
    </div>
    <div class="_tedx_payment_form_group phoneNumber">
      <label for="phone_number">Nomor Telepon</label>
      <input type="text" name="phone_number" value="{{ $user->phone_number }}" id="phone_number" readonly>
    </div>
    <div class="_tedx_payment_form_group address">
      <label for="street_address">Alamat Rumah</label>
      <textarea name="street_address" readonly id="street_address" cols="30" rows="10">{{ $user->street_address }}</textarea>
    </div>
    <div class="_tedx_payment_form_group ticketType">
      <label for="type">Tipe Tiket</label>
      <input type="text" name="type" value="{{ $ticket->type }}" id="type" readonly>
    </div>
    <div class="_tedx_payment_form_group ticketPrice">
      <label for="price">Harga Tiket</label>
      <input type="text" name="price" value="{{ $ticket->price }}" id="price" readonly>
    </div>
    <div class="_tedx_payment_form_group payment">
      <label for="payment_method">Metode Pembayaran</label>
      <select name="payment_method" id="payment_method">
        <option value="bca">BCA</option>
        <option value="mandiri">Mandiri</option>
      </select>
    </div>
    <div class="_tedx_payment_form_group proofPayment">
      <label for="payment_proof">Bukti Pembayaran</label>
      <input type="file" name="payment_proof" id="payment_proof" class="input-file">
    </div>
  </div>
  <button type="submit">Lanjutkan Pembayaran</button>
</form>
@endsection