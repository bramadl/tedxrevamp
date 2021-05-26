@extends('layouts.master')

@section('hero')
<div style="flex: 1;"></div>
<section class="_tedx_section _tedx_section_livestream">
    <div style="display: inline-block;">
        <div class="_tedx_section_title_overlay livestream">
            <div class="_tedx_section_title_wrapper">
                <div class="_tedx_section_title livestream">
                    <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Livestream</h2>
                </div>
            </div>
        </div>
        <div class="_tedx_section_about_cta">
            <div class="_tedx_link" cursor-class="hover"><a target="_blank" href="https://tedx.amhanisa.com/">Hello, Lorem!</a></div>
            <div class="_tedx_link" cursor-class="hover"><a target="_blank" href="{{ url('/faqs') }}">Kembali ke Beranda</a></div>
        </div>
    </div>
</section>
<div style="flex: 1;"></div>
@endsection

@section('content')
<section data-scroll-section>
    <div class="_tedx_livestream_container">
        <div class="_tedx_livestream_header">
            <h2>Halo, Selamat datang di Livestream</h2>
            <h1><span>TEDx</span>UniversitasBrawijaya</h1>
        </div>
        <div class="_tedx_livestream_video_container">
            <!--player code begin-->
            <div id="svp_player6p9l3b93bg8w" style="width:50%;height:300px;position:relative;">

            </div>
            <script language="javascript" type="text/javascript" src="//play.streamingvideoprovider.com/js/dplayer.js"></script>
            <script language="javascript">
                var vars = {
                    clip_id: "6p9l3b93bg8w",
                    transparent: "true",
                    pause: "0",
                    repeat: "",
                    bg_color: "#ffffff",
                    fs_mode: "2",
                    no_controls: "",
                    start_img: "0",
                    start_volume: "100",
                    close_button: "",
                    brand_new_window: "1",
                    auto_hide: "1",
                    stretch_video: "",
                    player_align: "NONE",
                    offset_x: "0",
                    offset_y: "0",
                    player_color_ratio: 0.6,
                    skinAlpha: "50",
                    colorBase: "#800000",
                    colorIcon: "#ffffff",
                    colorHighlight: "#7f54f8",
                    direct: "false",
                    is_responsive: "true",
                    viewers_limit: 0,
                    cc_position: "bottom",
                    cc_positionOffset: 70,
                    cc_multiplier: 0.03,
                    cc_textColor: "#ffffff",
                    cc_textOutlineColor: "#ffffff",
                    cc_bkgColor: "#000000",
                    cc_bkgAlpha: 0.1,
                    aspect_ratio: "16:9",
                    play_button: "1",
                    play_button_style: "pulsing",
                    sleek_player: "1",
                    floating_player: "none"
                };
                var svp_player = new SVPDynamicPlayer("svp_player6p9l3b93bg8w", "", "100%", "100%", {
                    use_div: "svp_player6p9l3b93bg8w",
                    skin: "3"
                }, vars);
                svp_player.execute();
                //
            </script>
            <noscript>Your browser does not support JavaScript! JavaScript is needed to display this video player.</noscript>
            <!--player code end-->
        </div>
        <div class="_tedx_livestream_livechat">
            <iframe frameBorder="0" scrolling="no" id="chat_frame" src="https://chat.webvideocore.net/index.html?room=6p9l3b93bg8w"></iframe>
        </div>
    </div>
</section>
@endsection