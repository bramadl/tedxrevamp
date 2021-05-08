@extends('layouts.master')

@section('hero')
<div style="flex: 1;"></div>
<section class="_tedx_section _tedx_section_partner">
    <div style="display: inline-block;">
        <div class="_tedx_section_title_overlay">
            <div class="_tedx_section_title_wrapper">
                <div class="_tedx_section_title">
                    <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Partners</h2>
                </div>
                <div class="_tedx_section_text">
                    <h3>Beberapa Pihak yang terlibat</h3>
                    <p>TEDxUniversitasBrawijaya 2021 mengucapkan terima kasih kepada seluruh pihak yang terlibat. Tanpa kontribusi para pihak terkait Manifestasi Peradaban tidak akan dapat berjalan dengan baik.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div style="flex: 1;"></div>
@endsection

@section('content')
<section id="partnersList" data-scroll-section>
    <div class="_tedx_section_image_partners_container">
        <div class="tedx_section_image_partners_content" data-scroll data-scroll-speed="1">
            <div class="_tedx_partner_image_wrapper">
                <img src="{{ asset('img/cocacola.png') }}" alt="">
            </div>
            <div class="_tedx_partner_profile_wrapper">
                <h1>Coca Cola</h1>
                <ul class="a">
                    <li><span cursor-class="subtle">Sponsor</span></li>
                    <li><a href="" cursor-class="hover">Instagram</a></li>
                    <li><a href="" cursor-class="hover">Facebook</a></li>
                    <li><a href="" cursor-class="hover">Whatsapp</a></li>
                </ul>
            </div>
        </div>
        <div class="tedx_section_image_partners_content" data-scroll data-scroll-speed="1">
            <div class="_tedx_partner_image_wrapper">
                <img src="{{ asset('img/cocacola.png') }}" alt="">
            </div>
            <div class="_tedx_partner_profile_wrapper">
                <h1>Coca Cola</h1>
                <ul class="a">
                    <li><span cursor-class="subtle">Sponsor</span></li>
                    <li><a href="" cursor-class="hover">Instagram</a></li>
                    <li><a href="" cursor-class="hover">Facebook</a></li>
                    <li><a href="" cursor-class="hover">Whatsapp</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="_tedx_section_image_partners_container" data-scroll data-scroll-speed="2">
        <div class="tedx_section_image_partners_content">
            <div class="_tedx_partner_image_wrapper">
                <img src="{{ asset('img/cocacola.png') }}" alt="">
            </div>
            <div class="_tedx_partner_profile_wrapper">
                <h1>Coca Cola</h1>
                <ul class="a">
                    <li><span cursor-class="subtle">Supported By</span></li>
                    <li><a href="" cursor-class="hover">Instagram</a></li>
                    <li><a href="" cursor-class="hover">Facebook</a></li>
                    <li><a href="" cursor-class="hover">Whatsapp</a></li>
                </ul>
            </div>
        </div>
        <div class="tedx_section_image_partners_content" data-scroll data-scroll-speed="2">
            <div class="_tedx_partner_image_wrapper">
                <img src="{{ asset('img/cocacola.png') }}" alt="">
            </div>
            <div class="_tedx_partner_profile_wrapper">
                <h1>Coca Cola</h1>
                <ul class="a">
                    <li><span cursor-class="subtle">Partnership</span></li>
                    <li><a href="" cursor-class="hover">Instagram</a></li>
                    <li><a href="" cursor-class="hover">Facebook</a></li>
                    <li><a href="" cursor-class="hover">Whatsapp</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection