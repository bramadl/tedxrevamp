@extends('layouts.member')

@section('link')
<a href="{{ url('member/dashboard') }}" cursor-class="hover">Kembali Ke Beranda</a>
@endsection

@section('content')
<section class="_tedx_section _tedx_section_partners">
  @if ($ticketUser)
  <div class="_tedx_tickets_info_wrapper">
    <div class="_tedx_tickets_user_user">
      <div class="_tedx_tickets_info_user">
        <div class="_tedx_tickets_info_user_content">
          <div class="_tedx_tickets_info_user_detail">
            <p>Nama Pembeli</p>
            <p>{{ $ticketUser->payment->user->first_name }} {{ $ticketUser->payment->user->last_name }}</p>
          </div>
          <div class="_tedx_tickets_info_user_detail">
            <p>Email Pembeli</p>
            <p>{{ $ticketUser->payment->user->email_address }}</p>
          </div>
          <div class="_tedx_tickets_info_user_detail">
            <p>Token Tiket</p>
            <p>{{ $ticketUser->payment->payment_status === 'pending' ? '-' : $ticketUser->token }}</p>
          </div>
          <div class="_tedx_tickets_info_user_detail">
            <p>Kode Tiket</p>
            <p>{{ $ticketUser->payment->payment_status === 'pending' ? '-' : $ticketUser->code }}</p>
          </div>
          <div class="_tedx_tickets_info_user_detail">
            <p>Nomor Telepon</p>
            <p>{{ $ticketUser->payment->user->phone_number }}</p>
          </div>
          <div class="_tedx_tickets_info_user_detail">
            <p>Token Refresh</p>
            <p>{{ $ticketUser->refresh_token }}</p>
          </div>
        </div>
      </div>
      <div class="_tedx_tickets_info_link">
        <div class="_tedx_link">
          <a href="{{ url('') }}" cursor-class="hover">Unduh Invoice Pembelian</a>
        </div>
      </div>
    </div>
    <div class="_tedx_tickets_preview">
      <div class="_tedx_ticket">
        <div class="_tedx_ticket_left">
          <div class="_tedx_ticket_logo">
            <img src="{{ asset('img/tedx.png') }}">
          </div>
          <div class="_tedx_ticket_title">
            <h2>Manifestasi Peradaban</h2>
            <div>
              <span>29-30 Mei 2021</span>
              <span class="dot"></span>
              <span>12:00 WIB</span>
            </div>
          </div>
          <div class="_tedx_ticket_token">
            <span>{{ strtoupper($ticketUser->code) }}</span>
          </div>
        </div>
        <svg class="_tedx_ticker_right" viewBox="0 0 386 400" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.75" d="M0.206634 399.609L110.914 199.915L0.0834961 0H162.246L191.995 53.6622L221.745 0H371.999C375.772 0 385.464 0 385.464 0L273.076 199.915L385.311 399.609C385.311 399.609 375.732 399.609 371.999 399.609H221.622L191.995 346.168L162.369 399.609H0.206634Z" fill="#B82B2B" />
          <line x1="1" y1="-1" x2="198.851" y2="-1" transform="matrix(0.48773 0.872994 -0.873401 0.487002 14 24.9756)" stroke="white" stroke-width="2" stroke-linecap="round" />
          <line x1="1" y1="-1" x2="88.9328" y2="-1" transform="matrix(-0.48773 0.872994 0.873401 0.487002 371.473 24.9756)" stroke="white" stroke-width="2" stroke-linecap="round" />
          <line x1="1" y1="-1" x2="58.9552" y2="-1" transform="matrix(0.48773 0.872994 -0.873401 0.487002 353 344.662)" stroke="white" stroke-width="2" stroke-linecap="round" />
          <line x1="1" y1="-1" x2="58.9552" y2="-1" transform="matrix(-0.48773 0.872994 0.873401 0.487002 193.242 347.659)" stroke="white" stroke-width="2" stroke-linecap="round" />
        </svg>
      </div>
    </div>
  </div>
  @else
  <div class="_tedx_tickets_info_wrapper empty_state">
    <p>Kamu belum pernah membeli ticket.</p>
    <div class="_tedx_link">
      <a href="{{ url('/ticket/payment') }}">Beli Sekarang</a>
    </div>
  </div>
  @endif
</section>
@endsection