@extends('layouts.payment')

@push('styles')
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    display: flex;
    align-items: center;
    justify-content: center;
    min-height: 100vh;
    background: linear-gradient(-45deg, #860b0b, #350517, #000000, #c20909);
    background-size: 400% 400%;
    animation: gradient 15s ease infinite;
  }

  div.confirm-email {
    background: #ffffff;
    border-radius: .5rem;
    font-family: "Open Sans", sans-serif;
    text-align: center;
    padding: 2rem 2rem;
    color: #101010;
  }

  div.confirm-email h1 {
    font-size: 1.5rem;
    font-weight: bold;
  }

  div.confirm-email p {
    margin: 1.5rem 0;
    font-weight: 300;
    background: #B82B2B;
    color: #ffffff;
    padding: 1rem;
    border-radius: .5rem;
  }

  div.confirm-email a {
    color: #B82B2B;
  }

  div.confirm-email p a {
    color: #ffffff;
  }
</style>
@endpush

@section('content')
<div class="_tedx_payment_title" data-scroll-section>
  <h1>Terima kasih telah melakukan <br><br> pembelian tiket <span>TEDx</span>UniversitasBrawjiaya</h1>
</div>
<div class="confirm-email" data-scroll-section>
  <h1>Hai, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!</h1>
  <p>
    Terimakasih telah melakukan pembelian tiket untuk livestreaming TEDxUniversitasBrawijaya2021.
    <br><br>
    Kami sudah mengirimkan invoice pembelian ke alamat email <strong>{{ Auth::user()->email_address }}</strong>
    <br><br>
    Dalam waktu 1x24 jam, sistem akan melakukan verifikasi pada pembelian ticket kamu.
    <br><br>
    Apabila terdapat kendala atau pertanyaan, silahkan hubungi kami di live chat personal dashboard!
    <br><br>
    <a
      href="{{ url('ticket/invoice/pdf?payment_id=' . $payment_id . '&proof=' . $payment_proof) }}" 
      target="_blank"
      class="_tedx_payment_method_container"
    >
      Unduh Invoice
    </a>
    <a
      href="{{ url('member/dashboard') }}" class="_tedx_payment_method_container"
    >
      Kembali ke Beranda
    </a>
  </p>
  <span>&copy; <a href="/">TEDxUniversitasBrawijaya</a> - with &hearts;</span>
</div>
@endsection

@push('scripts')
@if(session('success'))
<script>
  Toast.fire({
    icon: 'success',
    title: @json(session('success'))
  })
</script>
@endif
@endpush