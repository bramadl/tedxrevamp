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
<section id="partnersList" class="_tedx_section_image_partners_container" data-scroll-section>
    @foreach ($partners as $partner)
    <div class="tedx_section_image_partners_content" data-scroll>
        <div class="_tedx_partner_image_wrapper">
            <img src="{{ env('TEDXBRAWIJAYA_URL') }}/storage/brands/{{ $partner->avatar }}" alt="">
        </div>
        <div class="_tedx_partner_profile_wrapper">
            <h1>{{ $partner->name }}</h1>
            <ul class="social-media">
                <li><span cursor-class="subtle">Sponsor</span></li>
                @foreach ($partner->socialMedia as $socialMedia)
                <li><a href="{{ $socialMedia->url }}" cursor-class="hover">{{ $socialMedia->tag }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
    @endforeach
</section>
@endsection