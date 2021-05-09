@extends('layouts.master')

@section('hero')
<div style="flex: 1;"></div>
<section class="_tedx_section _tedx_section_about">
  <div style="display: inline-block;">
    <div class="_tedx_section_title_overlay">
      <div class="_tedx_section_title_wrapper">
        <div class="_tedx_section_title">
          <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">About</h2>
        </div>
        <div class="_tedx_section_text">
          <h3>TENTANG TEDxUniversitasBrawijaya</h3>
          <p>TEDxUniversitasBrawijaya merupakan TEDx University pertama di Malang yang diselenggarakan dan diinisiasi secara independen oleh mahasiswa Universitas Brawijaya dibawah lisensi TED yang telah berbagi ide kepada masyarakat luas sejak tahun 2015. TEDxUniversitasBrawijaya sekaligus menjadi upaya aktif dalam penyebaran gagasan unik dan transformatif dengan menjaring pembicara-pembicara lokal serta nasional yang telah terkurasi. </p>
        </div>
      </div>
    </div>
    <div class="_tedx_section_about_cta">
      <div class="_tedx_link" cursor-class="hover"><a target="_blank" href="https://tedx.amhanisa.com/">Past Events</a></div>
      <div class="_tedx_link" cursor-class="hover"><a target="_blank" href="{{ url('/faqs') }}">FAQs</a></div>
    </div>
  </div>
</section>
<div style="flex: 1;"></div>
@endsection

@section('content')
<div data-scroll-section>
  <div id="about-ted" class="_tedx_about_ted_wrapper">
    <div class="_tedx_about_ted_content">
      <div class="_tedx_about_ted_content_container">
        <div class="_tedx_title_alt">
          <h1>
            <p><span>About</span></p>
            <p><span>TED</span></p>
            <div class="background"></div>
          </h1>
        </div>
        <div class="_tedx_text">
          <p>TED is a nonprofit devoted to spreading ideas, usually in the form of short, powerful talks (18 minutes or less). TED began in 1984 as a conference where Technology, Entertainment and Design converged, and today covers almost all topics — from science to business to global issues — in more than 100 languages. Meanwhile, independently run TEDx events help share ideas in communities around the world.</p>
        </div>
        <div class="_tedx_link">
          <a target="_blank" href="https://www.ted.com/">Read More</a>
        </div>
      </div>
    </div>
    <div class="_tedx_about_ted_image">
      <img src="{{ asset('img/ted_talk.png') }}">
    </div>
  </div>

  <div id="about-tedx" class="_tedx_about_tedx_wrapper">
    <div class="_tedx_about_tedx_image">
      <img src="{{ asset('img/tedx_talk.png') }}">
    </div>
    <div class="_tedx_about_tedx_content">
      <div class="_tedx_about_ted_content_container">
        <div class="_tedx_title_alt">
          <h1>
            <p><span>About</span></p>
            <p><span>TEDx</span></p>
            <div class="background"></div>
          </h1>
        </div>
        <div class="_tedx_text">
          <p>TEDx is a grassroots initiative, created in the spirit of TED’s overall mission to research and discover “ideas worth spreading.” TEDx brings the spirit of TED to local communities around the globe through TEDx events. These events are organized by passionate individuals who seek to uncover new ideas and to share the latest research in their local areas that spark conversations in their communities. TEDx events include live speakers and recorded TED Talks, and are organized independently under a free license granted by TED.</p>
        </div>
        <div class="_tedx_link">
          <a target="_blank" href="https://www.ted.com/tedx/events/42718">Read More</a>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="behind-the-team" class="_tedx_section _tedx_section_core" data-scroll-section>
  <div class="_tedx_section_title_overlay">
    <div class="_tedx_section_title_wrapper">
      <div class="_tedx_section_title">
        <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">Core Team</h2>
      </div>
      <div class="_tedx_section_text">
        <h3>Core Team</h3>
        <p>TEDxUniversitasBrawijaya dinahkodai oleh berbagai sosok individu yang tergabung dalam Core Team. Mereka merupakan bagian dari komunitas lokal Mahasiswa/i Universitas Brawijaya yang mempunyai satu tujuan yang sama, yaitu menjalankan “Ideas Worth Spreading.”</p>
      </div>
    </div>
  </div>
</section>

<div id="coreTeams" data-scroll-section>
  <div class="container">
    <div class="carousel">
      <a href="/core/muhammad-huda/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/organizer.svg" alt="">
        <div>
          <h1>Muhammad Huda</h1>
          <p>Organizer</p>
        </div>
      </a>
      <a href="/core/david-leonardo/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/co-organizer.svg" alt="">
        <div>
          <h1>David Leonardo</h1>
          <p>Co Organizer</p>
        </div>
      </a>
      <a href="/core/sheila-istiningtyas/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/bm.svg" alt="">
        <div>
          <h1>Sheila Istiningtyas Padmarini</h1>
          <p>Budget Marketing</p>
        </div>
      </a>
      <a href="/core/putri-nesya/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/curator-1.svg" alt="">
        <div>
          <h1>Putri Nesya Wibowo</h1>
          <p>Curator</p>
        </div>
      </a>
      <a href="/core/daffa-naradhipa/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/curator-2.svg" alt="">
        <div>
          <h1>Daffa Naradhipa</h1>
          <p>Curator</p>
        </div>
      </a>
      <a href="/core/dio-pratama/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/sponsor-1.svg" alt="">
        <div>
          <h1>Dio Arya Pratama</h1>
          <p>Sponsorship</p>
        </div>
      </a>
      <a href="/core/andi-talitha/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/sponsor-2.svg" alt="">
        <div>
          <h1>Andi Talitha Ghassani Rizky</h1>
          <p>Sponsorship</p>
        </div>
      </a>
      <a href="/core/afina-syahrani/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/em-1.svg" alt="">
        <div>
          <h1>Afina Syahrani Damiar</h1>
          <p>Event Manager</p>
        </div>
      </a>
      <a href="/core/dewangga-akbar/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/em-2.svg" alt="">
        <div>
          <h1>Dewangga Akbar Pangaji</h1>
          <p>Event Manager</p>
        </div>
      </a>
      <a href="/core/afif-royyanto/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/ep-1.svg" alt="">
        <div>
          <h1>Afif Royyanto</h1>
          <p>Executive Producer</p>
        </div>
      </a>
      <a href="/core/destya-pramesti/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/ep-2.svg" alt="">
        <div>
          <h1>Destya Pramesti Shafa S</h1>
          <p>Executive Producer</p>
        </div>
      </a>
      <a href="/core/tsabita-afifah/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/cem.svg" alt="">
        <div>
          <h1>Tsabita Afifah Khoirunnisa</h1>
          <p>Communication, Editorials, and Marketing</p>
        </div>
      </a>
      <a href="/core/naufaldy-ghaly/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/design.svg" alt="">
        <div>
          <h1>Naufaldy Ghaly Alana</h1>
          <p>Designer</p>
        </div>
      </a>
      <a href="/core/dimas-prasetya/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/vp-1.svg" alt="">
        <div>
          <h1>Dimas Prasetya Adi Herlambang</h1>
          <p>Video Production</p>
        </div>
      </a>
      <a href="/core/mohammad-ikhsanudin/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/vp-2.svg" alt="">
        <div>
          <h1>Mohammad Ikhsanudin</h1>
          <p>Video Production</p>
        </div>
      </a>
      <a href="/core/bram-adl/profile" target="_blank" class="carousel__face" cursor-class="speaker">
        <img src="/img/cores/website.svg" alt="">
        <div>
          <h1>Bintang Ramadhan</h1>
          <p>Website Developer</p>
        </div>
      </a>
    </div>
  </div>
</div>

<section class="_tedx_section _tedx_section_teams volunteer" data-scroll-section>
  <div class="_tedx_section_title_overlay">
    <div class="_tedx_section_title_wrapper">
      <div class="_tedx_section_title">
        <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Volunteers</h2>
      </div>
      <div class="_tedx_section_text">
        <h3>The Volunteers</h3>
        <p>Terima kasih adalah dua kata yang mudah diartikan dalam bahasa manapun. Bersama dengan kalian, kita saling beralur dan membaur mewujudkan mimpi yang belum terwujud. Biarlah Manifestasi Peradaban menjadi kisah dan pengalaman baru untuk kita sebagai individu di tengah carut-marut dunia virtual yang melelahkan. <br> Kami bangga dengan kalian!</p>
      </div>
    </div>
  </div>
</section>

<div id="volunteerTeams" data-scroll-section>
  <div class="_tedx_volunteer_container">
    <div>
      <div class="_tedx_team_container">
        <div class="_tedx_link">
          <h2>Curator</h2>
        </div>
        <ul>
          <li>Arkanul Kautsar Sampurno</li>
          <li>Davina Alya Shakira</li>
          <li>Rafly A. Mahdy</li>
          <li>Siti Huwaena Maulidiah</li>
        </ul>
      </div>
      <div class="_tedx_team_container">
        <div class="_tedx_link">
          <h2>Sponsorship</h2>
        </div>
        <ul>
          <li>Alvin Ilham Hanafi</li>
          <li>Aurora Rivera Mulidina</li>
          <li>Nadiyah Farakh Putri</li>
          <li>Sophia Alviana Adiningtyas</li>
          <li>Wahana Mulyaning Galih</li>
        </ul>
      </div>
      <div class="_tedx_team_container">
        <div class="_tedx_link">
          <h2>Event Manager</h2>
        </div>
        <ul>
          <li>Amanda Salsabila Gita Setyananda</li>
          <li>Hamzah Abdul J.</li>
          <li>Nabita Sadira Putri Ichwani</li>
          <li>M. Ilham Haikal Jogo Fauzi Baqy</li>
        </ul>
      </div>
      <div class="_tedx_team_container">
        <div class="_tedx_link">
          <h2>Executive Producer</h2>
        </div>
        <ul>
          <li>Cinfy Putri Nursanthyasto</li>
          <li>Miftah Dian Pangesti</li>
          <li>Paloga Treheya Munthaha</li>
          <li>Siti Almira Shakilla</li>
          <li>Thirafi Bintang Ramadhan</li>
        </ul>
      </div>
    </div>
    <div>
      <div class="_tedx_team_container">
        <div class="_tedx_link">
          <h2>Communication, Editorials, and Marketing</h2>
        </div>
        <ul>
          <li>Achmad Ramadhona Choir</li>
          <li>Alifia Nurfajri Henia</li>
          <li>Darell Girasto</li>
          <li>Sekar Heksagara</li>
        </ul>
      </div>
      <div class="_tedx_team_container">
        <div class="_tedx_link">
          <h2>Design</h2>
        </div>
        <ul>
          <li>Cicilia Putri Amodia</li>
          <li>Mahindra Rhavell Kurniawan</li>
          <li>Nada Salsabilla</li>
          <li>Oliver Binsar Radber Lingga</li>
          <li>Rainerius Raka Putra Irtian</li>
        </ul>
      </div>
      <div class="_tedx_team_container">
        <div class="_tedx_link">
          <h2>Video Production</h2>
        </div>
        <ul>
          <li>Khansa Cetta Aqiilah Nasfa</li>
          <li>Adani Zata Yumni</li>
          <li>Muhammad Ikhsan Chandra</li>
          <li>Dewa Putra Irwana</li>
        </ul>
      </div>
      <div class="_tedx_team_container">
        <div class="_tedx_link">
          <h2>Website</h2>
        </div>
        <ul>
          <li>Luky Fahmi</li>
          <li>M. Iqbal Maulana</li>
          <li>Aya Azzara</li>
          <li>Rabiatul Auliah</li>
          <li>Rifki Karim Ramadhan</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<section class="_tedx_section _tedx_section_timeline" data-scroll-section>
  <div class="_tedx_section_title_overlay">
    <div class="_tedx_section_title_wrapper">
      <div class="_tedx_section_title">
        <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">Timeline</h2>
      </div>
      <div class="_tedx_section_text">
        <h3>PERJALANAN TEDXUNIVERSITASBRAWIJAYA 2021</h3>
        <p>Situasi pandemi bukan menjadi penghalang bagi kami untuk menyebarkan ide-ide luar biasa tentang budaya populer kepadamu. Mari kilas balik perjalanan TEDxUniversitasBrawijaya 2021 dalam menciptakan Manifestasi Peradaban secara virtual dengan memberikan pengalaman transendental. Perjalanan istimewa ini takkan terwujud tanpa kehadiranmu. </p>
      </div>
    </div>
  </div>
</section>

<div id="timelineTedx" data-scroll-section>
  <div class="draw-line-height">
    <svg id="line-svg" width="124" height="1462" viewBox="0 0 124 1462" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M8 8C44.1667 45 116.5 142.5 116.5 236.5C116.5 354 8 476.5 8 679.5C8 882.5 116.5 917 116.5 1025.5C116.5 1134 8 1229 8 1455.5" stroke="white" />
      <circle cx="8" cy="8" r="8" fill="white" />
      <circle cx="116" cy="249" r="8" fill="white" />
      <circle cx="40" cy="490" r="8" fill="white" />
      <circle cx="11" cy="732" r="8" fill="white" />
      <circle cx="106" cy="972" r="8" fill="white" />
      <circle cx="55" cy="1213" r="8" fill="white" />
      <circle cx="8" cy="1454" r="8" fill="white" />
    </svg>


    <div class="_tedx_timeline _tedx_timeline_one">
      <div class="_tedx_timeline_container">
        <div>
          <h1>Pendaftaran Elaborasi Ekspresi</h1>
          <p>10-17 Maret 2021</p>
        </div>
      </div>
    </div>
    <div class="_tedx_timeline _tedx_timeline_two">
      <div class="_tedx_timeline_container">
        <div>
          <h1>Elaborasi Ekspresi</h1>
          <p>27 Maret 2021</p>
        </div>
      </div>
    </div>
    <div class="_tedx_timeline _tedx_timeline_three">
      <div class="_tedx_timeline_container">
        <div>
          <h1>Gerai Sorai</h1>
          <p>12-20 April 2021</p>
        </div>
      </div>
    </div>
    <div class="_tedx_timeline _tedx_timeline_four">
      <div class="_tedx_timeline_container">
        <div>
          <h1>Pendaftaran Loka Hasta Karya</h1>
          <p>21 April - 4 Mei 2021</p>
        </div>
      </div>
    </div>
    <div class="_tedx_timeline _tedx_timeline_five">
      <div class="_tedx_timeline_container">
        <div>
          <h1>Loka Hasta Karya</h1>
          <p>21 Mei 2021</p>
        </div>
      </div>
    </div>
    <div class="_tedx_timeline _tedx_timeline_six">
      <div class="_tedx_timeline_container">
        <div>
          <h1>Virtual Exhibition</h1>
          <p>20-27 Mei 2021</p>
        </div>
      </div>
    </div>
    <div class="_tedx_timeline _tedx_timeline_seven">
      <div class="_tedx_timeline_container">
        <div>
          <h1>Puncak Acara</h1>
          <p>29-30 Mei 2021</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection