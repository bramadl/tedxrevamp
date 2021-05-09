@extends('layouts.master')

@section('hero')
<div class="_tedx_hero_title">
  <div class="_tedx_hero_title_container">
    <div class="_tedx_title">
      <h1>
        <p><span>Manifestasi</span></p>
        <br>
        <p><span>Peradaban</span></p>
        <div class="background"></div>
      </h1>
    </div>
    <div class="_tedx_subtitle">
      <h2>Yang Dibicarakan Ketika Membicarakan Manusia</h2>
    </div>
    <div class="_tedx_register_cta">
      <button cursor-class="hover">Beli Tiket</button>
    </div>
  </div>
</div>

<div class="_tedx_hero_asset">
  <div class="_tedx_hero_asset_container">
    <img src="{{ asset('img/illustrations/main-asset.png') }}" alt="TEDxUB2021">
  </div>
  <svg class="close" width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g opacity="0.75">
      <path d="M25.9259 0L100 74.0741L74.0741 100L2.07675e-05 25.9259L25.9259 0Z" fill="#B82B2B" />
      <path d="M74.0741 0L0 74.0741L25.9259 100L100 25.9259L74.0741 0Z" fill="#B82B2B" />
    </g>
  </svg>
  <div class="line-container">
    <svg class="line" width="1" height="150" viewBox="0 0 1 150" fill="none" xmlns="http://www.w3.org/2000/svg">
      <line opacity="0.5" x1="0.5" y1="2.18557e-08" x2="0.499993" y2="150" stroke="white" />
    </svg>
    <div class="text">
      29 - 30 Mei 2021
    </div>
  </div>
</div>

<div class="_tedx_hero_icons">
  <a href="https://twitter.com/tedxbrawijaya" cursor-class="hover"><i class="fab fa-twitter"></i></a>
  <a href="https://instagram.com/tedxuniversitasbrawijaya" cursor-class="hover"><i class="fab fa-instagram"></i></a>
  <a href="https://liff.line.me/1645278921-kWRPP32q?accountId=cgu9302m&openerPlatform=webview&openerKey=webview%3AunifiedSearch" cursor-class="hover"><i class="fab fa-line"></i></a>
</div>
@endsection

@section('content')
<section class="_tedx_section _tedx_section_about" data-scroll-section>
  <div style="display: inline-block;">
    <div class="_tedx_section_title_overlay">
      <div class="_tedx_section_title_wrapper">
        <div class="_tedx_section_title">
          <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">About</h2>
        </div>
        <div class="_tedx_section_text">
          <h3>Tema: Manifestasi Peradaban</h3>
          <p>TEDxUniversitasBrawijaya merupakan TEDx University pertama di Malang yang diselenggarakan dan diinisiasi secara independen oleh mahasiswa Universitas Brawijaya dibawah lisensi TED yang telah berbagi ide kepada masyarakat luas sejak tahun 2015. TEDxUniversitasBrawijaya sekaligus menjadi upaya aktif dalam penyebaran gagasan unik dan transformatif dengan menjaring pembicara-pembicara lokal serta nasional yang telah terkurasi. </p>
        </div>
      </div>
    </div>
    <div class="_tedx_section_about_cta">
      <div class="_tedx_link" cursor-class="hover"><a href="{{ url('/about#ted') }}">About TED</a></div>
      <div class="_tedx_link" cursor-class="hover"><a href="{{ url('/about') }}">About TEDxUniversitasBrawijaya</a></div>
      <div class="_tedx_link" cursor-class="hover"><a href="{{ url('/about#tedx') }}">About TEDx</a></div>
    </div>
  </div>
</section>

<!-- Video Teaser -->
<div id="videoTeaser" data-scroll-section>
  <div class="_tedx_video_teaser">
    <div class="_tedx_video_mask">
      <div class="_tedx_video_text">
        <h1><span>TEDx</span>UniversitasBrawijaya</h1>
        <h2>Manifestasi Peradaban: Yang Dibicarakan Ketika Membicarakan Manusia</h2>
        <button cursor-class="hover" class="open-video-player">Play Video</button>
      </div>
    </div>
  </div>
</div>
<!-- ./Video Teaser -->

<section class="_tedx_section _tedx_section_speakers" data-scroll-section>
  <div class="_tedx_section_title_overlay">
    <div class="_tedx_section_title_wrapper">
      <div class="_tedx_section_title">
        <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">Speakers</h2>
      </div>
      <div class="_tedx_section_text">
        <h3>Tema: Manifestasi Peradaban</h3>
        <p>Peradaban dimaknai sebagai pola kebudayaan yang terstruktur dalam menilai tingkatan suatu budaya di masyarakat. TEDxUniversitasBrawijaya 2021 menghadirkan para pembicara terbaik di bidangnya yang akan berbagi gagasan dan pengalaman denganmu untuk merayakan Manifestasi Peradaban.</p>
      </div>
    </div>
  </div>
</section>

<!-- Speaker List -->
<div id="speakerList" data-scroll-section>
  <div class="_tedx_speaker_container">
    <div class="_tedx_speaker_wrapper">
      <div class="_tedx_speaker_profile">
        <div class="_tedx_speaker_image reveal">
          <img src="https://ik.imagekit.io/tedxub/anastasia_cCbiXpWj_3t.jpg">
          <div class="_tedx_speaker_title">
            <div>
              <h1>Ungkaian Persepsi dan Stigma Wajah Asia</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="_tedx_speaker_detail">
        <div class="_tedx_speaker_detail_title">
          <h1>Ungkaian Persepsi dan Stigma Wajah Asia</h1>
        </div>
        <div class="_tedx_speaker_detail_name">
          <h2><em>Anastasia Satriyo</em> | Psikolog</h2>
        </div>
        <div class="_tedx_speaker_detail_description">
          <p>Persepsi menjadi salah satu proses penting untuk menangkap dan memproses informasi untuk diterjemahkan dalam otak yang kemudian setiap individu berimprovisasi untuk mengelompokkan informasi-informasi tersebut berdasarkan kategorinya sebagai sebuah stereotip. Stereotip dapat dilakukan pada suatu kelompok manusia, benda, budaya, dan lainnya. Tidak jarang dalam prakteknya bahwa pengelompokkan informasi ini dapat dilakukan secara negatif dan sengaja oleh suatu kelompok budaya pada kelompok lainnya sehingga menimbulkan keresahan dan dampak multidimensi. <br><br>
            Pada talk kali ini, Anastasia Satriyo akan membahas bagaimana persepsi stigma Asia dari kacamata Barat dapat membentuk konsep diri orang Indonesia.</p>
        </div>
      </div>
    </div>
    <div class="_tedx_speaker_list">
      <div class="_tedx_speaker_avatar" data-target="anastasia" cursor-class="speaker">
        <img src="https://ik.imagekit.io/tedxub/anastasia_cCbiXpWj_3t.jpg">
        <div class="_tedx_speaker_info">
          <h1>Anastasia Satriyo</h1>
          <p>Psikolog</p>
        </div>
      </div>
      <div class="_tedx_speaker_avatar" data-target="diego" cursor-class="speaker">
        <img src="https://ik.imagekit.io/tedxub/diego_17X4gmRxS.jpg">
        <div class="_tedx_speaker_info">
          <h1>Diego Yanuar</h1>
          <p>Pesepeda</p>
        </div>
      </div>
      <div class="_tedx_speaker_avatar" data-target="clara" cursor-class="speaker">
        <img src="https://ik.imagekit.io/tedxub/clara_lMJ9QkOIr3X.jpg">
        <div class="_tedx_speaker_info">
          <h1>Clara Tunjung Paramesti</h1>
          <p>Mahasiswa</p>
        </div>
      </div>
      <div class="_tedx_speaker_avatar" data-target="jimi" cursor-class="speaker">
        <img src="https://ik.imagekit.io/tedxub/jimi_pe2cB_9Ovan.jpg">
        <div class="_tedx_speaker_info">
          <h1>Jimi Multhazam</h1>
          <p>Musisi</p>
        </div>
      </div>
      <div class="_tedx_speaker_avatar" data-target="hengki" cursor-class="speaker">
        <img src="https://ik.imagekit.io/tedxub/DSC04080_hLZtl6tYTh1O.JPG">
        <div class="_tedx_speaker_info">
          <h1>Hengki Herwanto</h1>
          <p>Kurator</p>
        </div>
      </div>
      <div class="_tedx_speaker_avatar" data-target="abdul" cursor-class="speaker">
        <img src="https://ik.imagekit.io/tedxub/abdul_9Ve4sVKfy.JPG">
        <div class="_tedx_speaker_info">
          <h1>Abdul Hair</h1>
          <p>Akademisi</p>
        </div>
      </div>
      <div class="_tedx_speaker_avatar" data-target="mice" cursor-class="speaker">
        <img src="https://ik.imagekit.io/tedxub/mice_YRGNQESaK.jpg">
        <div class="_tedx_speaker_info">
          <h1>Mice Cartoon</h1>
          <p>Komikus</p>
        </div>
      </div>
      <div class="_tedx_speaker_avatar" data-target="bondan" cursor-class="speaker">
        <img src="https://ik.imagekit.io/tedxub/bondan_98mJccjBp.JPG">
        <div class="_tedx_speaker_info">
          <h1>Bondan Sekari Adi</h1>
          <p>Value Investor</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ./Speaker List -->

<section class="_tedx_section _tedx_section_anima" data-scroll-section>
  <div class="_tedx_section_title_overlay">
    <div class="_tedx_section_title_wrapper">
      <div class="_tedx_section_title">
        <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="2">Anima</h2>
      </div>
      <div class="_tedx_section_text">
        <h3>[an-nuh-mah]: Latin - JIWA</h3>
        <p>Dalam kehidupan kita dengan masyarakat kolektif, tentunya kita memiliki pribadi yang berbeda untuk kita tunjukkan kepada dunia luar. Dalam upaya kita untuk terkoneksi dengan satu sama lain, kita membentuk sebuah persona, identitas, sebuah jiwa yang merepresentasikan siapa diri kita ditengah arus masyarakat. Lalu dalam dunia populer ini siapakah kamu?</p>
      </div>
    </div>
  </div>
</section>

<!-- Anima Archetype -->
<div id="animaArchetype" data-scroll-section>
  <div class="_tedx_archetype">
    <div id="drag-container" cursor-class="drag">
      <div id="spin-container">
        <!-- Add your images (or video) here -->
        <img src="https://ik.imagekit.io/tedxub/Dreamer_Z_Qi8RWfGv.png" data-archetype="dreamer" cursor-class="dreamer" />
        <img src="https://ik.imagekit.io/tedxub/Lover_OTft5lKXOpI.png" data-archetype="lover" cursor-class="lover" />
        <img src="https://ik.imagekit.io/tedxub/Hero_kA1rvFeZMvh.png" data-archetype="hero" cursor-class="hero" />
        <img src="https://ik.imagekit.io/tedxub/Jester_r8BP7ai_UT.png" data-archetype="jester" cursor-class="jester" />

        <!-- Text at center of ground -->
        <div id="archetypeText" class="text">
          <h2>Klik dan tahan lalu geser mouse untuk memutar kartu dan klik pada salah satu kartu untuk membaca Archetype</h2>
        </div>
      </div>
      <div id="ground"></div>
    </div>
  </div>
</div>
<!-- ./Anima Archetype -->

<section class="_tedx_section _tedx_section_ticket" data-scroll-section>
  <div class="_tedx_section_title_overlay">
    <div class="_tedx_section_title_wrapper">
      <div class="_tedx_section_title">
        <h2 data-scroll data-scroll-direction="horizontal" data-scroll-speed="-2">Ticket</h2>
      </div>
      <div class="_tedx_section_text">
        <h3>PRESALE TICKETS</h3>
        <p>Pesan tiket Presale 1 pada tanggal 11-17 Mei sekarang untuk mendapatkan penawaran menarik! <br> Kesempatan terakhir! Beli tiket Presale 2 pada tanggal 18-24 Mei sekarang untuk mengisi kursi terbatas.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Ticket Purchase -->
<div id="ticketPurchase" data-scroll-section>

  @foreach ($tickets as $key => $ticket)
  <div class="_tedx_ticket_container">
    <div class="_tedx_ticket_detail">
      <div class="_tedx_ticket_description">
        <div>
          <h3><span>Ticket</span> Presale {{ $key + 1 }}</h3>
        </div>
        <div>
          <p>{{ $ticket->description }}</p>
          <br>
          <p>TED Talks | Virtual Exhibition | TED Kit | Special Performance</p>
        </div>
        <div>
          <a href="#" cursor-class="hover">Syarat dan Ketentuan</a>
        </div>
      </div>
      <div class="_tedx_ticket_button">
        @if ($presaleAvailable[$ticket->type])
        <a href="{{ url('/ticket/payment?type=' . $ticket->type) }}" cursor-class="hover">
          <span>Beli Tiket</span>
          <strong>Rp {{ number_format($ticket->price,2,',','.') }}</strong>
        </a>
        @else
        <button cursor-class="hover">
          <span>Beli Tiket</span>
          <strong>Rp {{ number_format($ticket->price,2,',','.') }}</strong>
        </button>
        @endif
      </div>
    </div>
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
          <span>A2XX XXXX XXXX XXA2</span>
        </div>
      </div>
      <svg class="_tedx_ticket_right" viewBox="0 0 386 400" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path opacity="0.75" d="M0.206634 399.609L110.914 199.915L0.0834961 0H162.246L191.995 53.6622L221.745 0H371.999C375.772 0 385.464 0 385.464 0L273.076 199.915L385.311 399.609C385.311 399.609 375.732 399.609 371.999 399.609H221.622L191.995 346.168L162.369 399.609H0.206634Z" fill="#B82B2B" />
        <line x1="1" y1="-1" x2="198.851" y2="-1" transform="matrix(0.48773 0.872994 -0.873401 0.487002 14 24.9756)" stroke="white" stroke-width="2" stroke-linecap="round" />
        <line x1="1" y1="-1" x2="88.9328" y2="-1" transform="matrix(-0.48773 0.872994 0.873401 0.487002 371.473 24.9756)" stroke="white" stroke-width="2" stroke-linecap="round" />
        <line x1="1" y1="-1" x2="58.9552" y2="-1" transform="matrix(0.48773 0.872994 -0.873401 0.487002 353 344.662)" stroke="white" stroke-width="2" stroke-linecap="round" />
        <line x1="1" y1="-1" x2="58.9552" y2="-1" transform="matrix(-0.48773 0.872994 0.873401 0.487002 193.242 347.659)" stroke="white" stroke-width="2" stroke-linecap="round" />
      </svg>
    </div>
  </div>
  @endforeach

</div>
<!-- ./Ticket Purchase -->
@endsection

@section('video')
<div id="videoPlayer">
  <div class="close-video-player">
    <span>&times;</span>
  </div>

  <video width="320" height="240" controls>
    <source src="https://tedxuniversitasbrawijaya.com/video/teaser.mp4" type="video/mp4" />
    <source src="https://tedxuniversitasbrawijaya.com/video/teaser.webm" type="video/webm">
    Your browser does not support the video tag.
  </video>
</div>
@endsection