<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEDxUniversitasBrawijaya 2021 | Volunteer Register</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <section class="_tedx_register_container">
        <div class="_tedx_register_content">
            <div class="_tedx_register_title">
                <h1>Selamat Datang Volunteer <span>TEDx</span>UniversitasBrawijaya</h1>
            </div>
            <form action="{{ url('/member/register/volunteer') }}" method="POST" class="_tedx_register_form_wrapper">
                @csrf
                <div class="_tedx_auth_form_group">
                    <div>
                        <input type="text" name="first_name" value="{{ old('first_name') }}" placeholder="Nama Depan" class="firstName">
                        @error('first_name')
                        <span class="text-error">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <input type="text" name="last_name" value="{{ old('last_name') }}" placeholder="Nama Belakang" class="lastName">
                        @error('last_name')
                        <span class="text-error">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="_tedx_auth_form">
                    <input type="email" name="email_address" value="{{ old('email_address') }}" placeholder="Alamat Email">
                    @error('email_address')
                    <span class="text-error">{{$message}}</span>
                    @enderror
                </div>
                <div class="_tedx_auth_form">
                    <select name="division">
                        <option value="" selected hidden disabled>Pilih Divisi</option>
                        <option value="Organizer">Organizer</option>
                        <option value="Co-Organizer">CO-Organizer</option>
                        <option value="Curator">Curator</option>
                        <option value="CEM">Communication, Editorials, and Marketing</option>
                        <option value="Sponsorship">Sponsorship</option>
                        <option value="Design">Design</option>
                        <option value="Event Manager">Event Manager</option>
                        <option value="Video Production">Video Production</option>
                        <option value="Executive Producer">Executive Producer</option>
                        <option value="Website">Website</option>
                    </select>
                    @error('division')
                    <span class="text-error">{{$message}}</span>
                    @enderror
                </div>
                <div class="_tedx_auth_form">
                    <input type="password" name="password" value="{{ old('password') }}" placeholder="Kata Sandi">
                    @error('password')
                    <span class="text-error">{{$message}}</span>
                    @enderror
                </div>
                <div class="_tedx_auth_submit_button">
                    <button type="submit">Sign Up</button>
                </div>
            </form>
            <p>
                <span>Sudah memiliki akun? <a href="{{ url('/member/login') }}">Sign in</a></span>
                <span><a href="/">Kembali ke halaman utama</a></span>
            </p>
        </div>
    </section>
</body>

</html>