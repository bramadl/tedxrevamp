<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDxUniversitasBrawijaya 2021 | Member Login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    <section class="_tedx_register_container">
        <div class="_tedx_register_content">
            <div class="_tedx_register_title">
                <h1>Selamat Datang di <span>TEDx</span>UniversitasBrawijaya</h1>
            </div>
            <form action="{{ url('/member/login') }}" method="POST" class="_tedx_register_form_wrapper">
                @csrf
                <div class="_tedx_form">
                    <input type="email" name="email_address" placeholder="Alamat Email">
                </div>
                <div class="_tedx_form">
                    <input type="password" name="password" placeholder="Kata Sandi">
                </div>
                <div class="_tedx_submit_button">
                    <button type="submit">Sign In</button>
                </div>
            </form>
            <p>
                <span>Belum memiliki akun? <a href="{{ url('/member/register') }}">Register</a></span>
                <span><a href="/">Kembali ke halaman utama</a></span>
            </p>
        </div>
    </section>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
        })
    </script>
    @if (session('status'))
    <script>
        Toast.fire({
            icon: 'success',
            title: @json(session('status'))
        })
    </script>
    @endif
    @if (session('warning'))
    <script>
        Toast.fire({
            icon: 'warning',
            title: @json(session('warning'))
        })
    </script>
    @endif
    @if (session('error'))
    <script>
        Toast.fire({
            icon: 'error',
            title: @json(session('error'))
        })
    </script>
    @endif
</body>

</html>