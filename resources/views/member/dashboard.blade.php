@extends('layouts.master')

@section('hero')
<div style="flex: 1;"></div>
<section class="_tedx_section _tedx_section_about dashboard">
    <div style="display: inline-block;">
        <div class="_tedx_section_title_overlay dashboard">
            <div class="_tedx_section_title_wrapper">
                <div class="_tedx_section_title dashboard">
                    <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Dashboard</h2>
                </div>
            </div>
        </div>
        <div class="_tedx_section_about_cta _tedx_section_dashboard_cta">
            <div>
                <p class="_tedx_link">Hello, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!</p>
            </div>
            <div>
                <form action="{{ url('/member/logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="_tedx_link" cursor-class="overlay">Logout Account</button>
                </form>
            </div>
        </div>
</section>
<div style="flex: 1;"></div>
@endsection

@section('content')
<div data-scroll-section>
    <div class="_tedx_dashboard_content_container">
        <!-- STATUS USER -->
        <div class="_tedx_dashboard_status_wrapper">
            <div class="_tedx_dashboard_status_caption">
                <h2><span>TEDx</span>UniversitasBrawijaya2021</h2>
                <p>Manifestasi Peradaban</p>
            </div>
            <div class="_tedx_dashboard_status_button">
                <div class="_tedx_dashboard_status_audiens">
                    <p>{{ Auth::user()->role === 'user' ? 'Audience' : Auth::user()->role }}</p>
                    <a
                        href="{{ url('member/resend/confirm') }}"
                        style="{{
                            Auth::user()->verified
                                ? 'background: linear-gradient(135deg, #A1FF8B 0%, #3F93FF 96.83%)'
                                : 'background: linear-gradient(135deg, #BD344B 2.88%, #082440 100%)'
                        }}"
                        cursor-class="hover"
                    >
                        {{ Auth::user()->verified ? 'Confirmed' : 'Not Confirmed' }}
                    </a>
                </div>
            </div>
        </div>
        <!-- END STATUS USER -->

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
                    <a href="" cursor-class="link">Kunjungi Pameran</a>
                </div>
            </div>
            <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
                <div class="_tedx_card_feature_title">
                    <i class="fas fa-ticket-alt"></i>
                    <h2>Pembelian Tiket</h2>
                </div>
                <div class="_tedx_card_feature_caption">
                    <p>Lihat invoice, status pembelian, dan history dari pembelian tiket di akun kamu.</p>
                </div>
                <div class="_tedx_link_alt">
                    <a href="" cursor-class="link">Lihat Tiket</a>
                </div>
            </div>
            <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
                <div class="_tedx_card_feature_title">
                    <i class="fas fa-video"></i>
                    <h2>Livestream Channel</h2>
                </div>
                <div class="_tedx_card_feature_caption">
                    <p>Kunjungi pameran karya terbaik dari Loka Hasta Karya dengan pengalaman virtual.</p>
                </div>
                <div class="_tedx_link_alt">
                    <a href="" cursor-class="link">Masuk Livestream</a>
                </div>
            </div>
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
            <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
                <div class="_tedx_card_feature_title">
                    <i class="fas fa-sync"></i>
                    <h2>Permintaan Token</h2>
                </div>
                <div class="_tedx_card_feature_caption">
                    <p>Membuat permintaan untuk refresh token yang telah terpakai sesuai dengan syarat dan kondisi.</p>
                </div>
                <div class="_tedx_link_alt">
                    <a href="" cursor-class="link">Buat Permintaan</a>
                </div>
            </div>
            <div class="_tedx_dashboard_card_feature" cursor-class="overlay">
                <div class="_tedx_card_feature_title">
                    <i class="fas fa-user"></i>
                    <h2>Kelola Akun</h2>
                </div>
                <div class="_tedx_card_feature_caption">
                    <p>Lihat detail akun dan status akun kamu serta ubah password jika diperlukan.</p>
                </div>
                <div class="_tedx_link_alt">
                    <a href="" cursor-class="link">Kelola Akun</a>
                </div>
            </div>
        </div>
        <!-- END USER CARD FEATURES -->
    </div>
</div>
@endsection

@push('scripts')
@if (session('warning'))
<script>
    Toast.fire({
        icon: 'warning',
        title: @json(session('warning'))
    })
</script>
@endif
@endpush