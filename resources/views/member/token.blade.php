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
                <p class="_tedx_link">Hello,!</p>
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
                    <p>Audiences</p>
                </div>
            </div>
        </div>
        <!-- END STATUS USER -->

        <!-- User Form Request -->
        <div class="_tedx_form_request_token_wrapper">
            <div class="_tedx_form_request_token_content">
                <div class="_tedx_request_form_group firstname">
                    <label for="firstName">Nama Depan</label>
                    <input type="text" id="firstName">
                </div>
                <div class="_tedx_request_form_group lastname">
                    <label for="lastName">Nama Belakang</label>
                    <input type="text" id="lastName">
                </div>
                <div class="_tedx_request_form_group email">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email">
                </div>
                <div class="_tedx_request_form_group phone">
                    <label for="phoneNumber">Nomor Telepon</label>
                    <input type="number" id="phoneNumber">
                </div>
                <div class="_tedx_request_form_group token">
                    <label for="token">Token Tiket</label>
                    <input type="token" id="token">
                </div>
                <div class="_tedx_request_form_group tiket">
                    <label for="tiket">Kode Tiket</label>
                    <input type="tiket" id="tiket">
                </div>
            </div>
            <div class="_tedx_request_form_group reason">
                <label for="reason">Alasan</label>
                <textarea name="" id="reason" cols="30" rows="10"></textarea>
            </div>
            <div class="_tedx_request_form_button">
                <a href="">Kirim Permintaan</a>
            </div>
        </div>
        <!-- User Form Request  -->
    </div>
</div>
@endsection