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
    <div class="_tedx_livestream_video_wrapper">
        <img src="https://images.unsplash.com/photo-1607968565043-36af90dde238?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1650&q=80" alt="">
    </div>
</div>
@endsection