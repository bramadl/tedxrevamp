@extends ('layouts.master')


@section('hero')
<section class="_tedx_section_livestream">
    <div class="_tedx_section_livestream_title">
        <h1>Selamat datang di livestream</h1>
        <h1 class="_tedx_title_bold"><span>TEDx</span>UniversitasBrawijaya2021</h1>
    </div>
    <div class="_tedx_section_livestream_content">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat consequatur perferendis vero ullam quod esse. Ex vero laboriosam sed aut quibusdam beatae tempora enim aspernatur.</p><br>
        <p>Selamat menonton!</p>
    </div>
</section>
@endsection

@section('content')
<div class="_tedx_livestream_container" data-scroll-section>
    <!--player code begin-->
<div id="svp_player6p9l3b93bg8w" style="width:720px;height:810px;position:relative;">
	
    </div>
    <script language="javascript" type="text/javascript" src="//play.streamingvideoprovider.com/js/dplayer.js"></script>
    <script language="javascript">
    var vars = {clip_id:"6p9l3b93bg8w",transparent:"true",pause:"1",repeat:"",bg_color:"#ffffff",fs_mode:"2",no_controls:"",start_img:"0",start_volume:"34",close_button:"",brand_new_window:"1",auto_hide:"1",stretch_video:"",player_align:"NONE",offset_x:"0",offset_y:"0",player_color_ratio:0.6,skinAlpha:"50",colorBase:"#250864",colorIcon:"#ffffff",colorHighlight:"#7f54f8",direct:"false",is_responsive:"true",viewers_limit:0,cc_position:"bottom",cc_positionOffset:70,cc_multiplier:0.03,cc_textColor:"#ffffff",cc_textOutlineColor:"#ffffff",cc_bkgColor:"#000000",cc_bkgAlpha:0.1,aspect_ratio:"16:9",play_button:"1",play_button_style:"pulsing",sleek_player:"1",floating_player:"none"};
    var svp_player = new SVPDynamicPlayer("svp_player6p9l3b93bg8w", "", "100%", "100%", {use_div:"svp_player6p9l3b93bg8w",skin:"3"}, vars);
    svp_player.execute();
    //-->
    </script>
    <noscript>Your browser does not support JavaScript! JavaScript is needed to display this video player.</noscript>
    <!--player code end-->
</div>
@endsection