<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Web Title -->
  <title>TEDxUniversitasBrawijaya | Member Area</title>

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="/favicon/android-chrome-512x512.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" href="/favicon/favicon.ico">
  <meta name="theme-color" content="#ffffff">

  <!-- Google Fonts: Open Sans & Playfair Display -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
  <!-- Locomotive Scroll CSS -->
  <link rel="stylesheet" href="https://unpkg.com/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.css" />
  <!-- Main Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="custom-cursor">
  <div class="_tedx" data-scroll-container>
    @include('layouts.partials.menu')
    <div class="_tedx_header_wrapper" data-scroll-section>
      <div class="_tedx_hero_wrapper">
        @include('layouts.partials.navigation')
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
      </div>
    </div>
    <div data-scroll-section>
      <div class="_tedx_dashboard_content_container">
        <!-- STATUS USER -->
        <div class="_tedx_dashboard_status_wrapper">
          <div class="_tedx_dashboard_status_caption">
            <h2><span>TEDx</span>UniversitasBrawijaya2021</h2>
            <p>
              Manifestasi Peradaban
              <span class="line"></span>
              @yield('link')
            </p>
          </div>
          <div class="_tedx_dashboard_status_button">
            <div class="_tedx_dashboard_status_audiens">
              <p>{{ Auth::user()->role === 'user' ? 'Audience' : Auth::user()->role }}</p>
              @if (!Auth::user()->verified)
              <a href="{{ url('member/resend/confirm') }}" target="_blank" style="background: linear-gradient(135deg, #BD344B 2.88%, #082440 100%)" cursor-class="resend">
                Tidak Aktif
              </a>
              @else
              <span style="background: linear-gradient(135deg, #A1FF8B 0%, #3F93FF 96.83%)">
                Aktif
              </span>
              @endif
            </div>
          </div>
        </div>
        <!-- END STATUS USER -->

        @yield('content')
      </div>
    </div>
    @include('layouts.partials.footer')
  </div>
  @yield('video')
  <div id="cursor">
    <div class="cursor__circle"></div>
  </div>

  <!-- GSAP JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" integrity="sha512-cdV6j5t5o24hkSciVrb8Ki6FveC2SgwGfLE31+ZQRHAeSRxYhAQskLkq3dLm8ZcWe1N3vBOEYmmbhzf7NTtFFQ==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/plugins/CSSPlugin.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js" integrity="sha512-Q+G390ZU2qKo+e4q+kVcJknwfGjKJOdyu5mVMcR95NqL6XaF4lY4nsSvIVB3NDP54ACsS9rqhE1DVqgpApl//Q==" crossorigin="anonymous"></script>
  <!-- Locomotive Scroll JS -->
  <script src="https://unpkg.com/locomotive-scroll@4.0.6/dist/locomotive-scroll.min.js"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script>
    const Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: false,
      timer: 3000,
    })
  </script>
  <!--Start of Tawk.to Script-->
  <script type="text/javascript">
    var Tawk_API = Tawk_API || {},
      Tawk_LoadStart = new Date();
    (function() {
      var s1 = document.createElement("script"),
        s0 = document.getElementsByTagName("script")[0];
      s1.async = true;
      s1.src = 'https://embed.tawk.to/609035a1b1d5182476b532e1/1f4pl30i8';
      s1.charset = 'UTF-8';
      s1.setAttribute('crossorigin', '*');
      s0.parentNode.insertBefore(s1, s0);
    })();
  </script>
  <!--End of Tawk.to Script-->
  @if (session('warning'))
  <script>
    Toast.fire({
      icon: 'warning',
      title: @json(session('warning'))
    })
  </script>
  @endif
  @stack('scripts')
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>