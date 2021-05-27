@extends('layouts.member')

@section('link')
<a href="{{ url('/') }}" cursor-class="hover">Kembali Ke Halaman Utama</a>
@endsection

@section('content')
<!-- USER CARD FEATURES -->
<div class="_tedx_dashboard_card_features_wrapper">
    <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
        <div class="_tedx_card_feature_title">
            <i class="fas fa-desktop"></i>
            <h2>Virtual Art Exhibition</h2>
        </div>
        <div class="_tedx_card_feature_caption">
            <p>Kunjungi pameran karya terbaik dari Loka Hasta Karya dengan pengalaman virtual.</p>
        </div>
        <div class="_tedx_link_alt">
            <a target="_blank" href="https://hubs.mozilla.com/9tGCMJb/loka-hasta-karya" cursor-class="link">Kunjungi Pameran</a>
        </div>
    </div>
    @if (Auth::user()->role === 'user')
    <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
        <div class="_tedx_card_feature_title">
            <i class="fas fa-ticket-alt"></i>
            <h2>Pembelian Tiket</h2>
        </div>
        <div class="_tedx_card_feature_caption">
            <p>Lihat invoice, status pembelian, dan history dari pembelian tiket di akun kamu.</p>
        </div>
        <div class="_tedx_link_alt">
            <a href="{{ url('member/pembelian-ticket') }}" cursor-class="link">Lihat Tiket</a>
        </div>
    </div>
    @endif
    <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
        <div class="_tedx_card_feature_title">
            <i class="fas fa-video"></i>
            <h2>Livestream Channel</h2>
        </div>
        <div class="_tedx_card_feature_caption">
            <p>Kunjungi pameran karya terbaik dari Loka Hasta Karya dengan pengalaman virtual.</p>
        </div>
        <div class="_tedx_link_alt">
            <a href="{{ url('member/livestream') }}" cursor-class="link">Masuk Livestream</a>
        </div>
    </div>
    @if (Auth::user()->role === 'core' || Auth::user()->role === 'volunteer')
    <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
        <div class="_tedx_card_feature_title">
            <i class="fas fa-calendar-alt"></i>
            <h2>Jadwal Kegiatan</h2>
        </div>
        <div class="_tedx_card_feature_caption">
            <p>Urutan kegiatan pelaksanaan puncak acara pada sesi livestream TEDxUniversitasBrawijaya2021.</p>
        </div>
        <div class="_tedx_link_alt">
            <a href="" cursor-class="link">Unduh Jadwal</a>
        </div>
    </div>
    @endif
    @if (Auth::user()->role === 'user')
    <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
        <div class="_tedx_card_feature_title">
            <i class="fas fa-sync"></i>
            <h2>Permintaan Token</h2>
        </div>
        <div class="_tedx_card_feature_caption">
            <p>Membuat permintaan untuk refresh token yang telah terpakai sesuai dengan syarat dan kondisi.</p>
        </div>
        <div class="_tedx_link_alt">
            <a href="{{ url('/member/permintaan-token') }}" cursor-class="link">Buat Permintaan</a>
        </div>
    </div>
    @endif
    <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
        <div class="_tedx_card_feature_title">
            <i class="fas fa-user"></i>
            <h2>Kelola Akun</h2>
        </div>
        <div class="_tedx_card_feature_caption">
            <p>Lihat detail akun dan status akun kamu serta ubah password jika diperlukan.</p>
        </div>
        <div class="_tedx_link_alt">
            <a href="{{ url('/member/kelola-akun') }}" cursor-class="link">Kelola Akun</a>
        </div>
    </div>
</div>
<!-- END USER CARD FEATURES -->
@endsection

@push('scripts')
@if (session('success'))
  <script>
    Toast.fire({
      icon: 'success',
      title: @json(session('success'))
    })
  </script>
@endif
@if (session('info'))
  <script>
    Toast.fire({
      icon: 'info',
      title: @json(session('info'))
    })
  </script>
@endif
@if (session('warning'))
  <script>
    Toast.fire({
      icon: 'warning',
      title: @json(session('warning'))
    })
  </script>
@endif
@endpush