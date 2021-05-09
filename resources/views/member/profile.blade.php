@extends('layouts.member')

@section('link')
<a href="{{ url('member/dashboard') }}" cursor-class="hover">Kembali Ke Beranda</a>
@endsection

@section('content')
<form action="{{ url('member/kelola-akun') }}" method="POST">
    @csrf
    @method('PUT')
    <div class="_tedx_wrapper_form">
        <div class="_tedx_form_group">
            <label for="first_name" class="_tedx_link">
                <p>Nama Depan</p>
            </label>
            <input type="text" name="first_name" value="{{ Auth::user()->first_name }}">
            @error('first_name')
                <span class="text-error-alt">{{ $message }}</span>
            @enderror
        </div>
        <div class="_tedx_form_group">
            <label for="last_name" class="_tedx_link">
                <p>Nama Belakang</p>
            </label>
            <input type="text" name="last_name" value="{{ Auth::user()->last_name }}">
            @error('last_name')
                <span class="text-error-alt">{{ $message }}</span>
            @enderror
        </div>
        <div class="_tedx_form_group">
            <label for="email_address" class="_tedx_link">
                <p>Alamat Email</p>
            </label>
            <input type="email" name="email_address" value="{{ Auth::user()->email_address }}">
            @error('email_address')
                <span class="text-error-alt">{{ $message }}</span>
            @enderror
        </div>
        <div class="_tedx_form_group">
            <label for="password" class="_tedx_link">
                <p>Password</p>
            </label>
            <input type="password" name="password" placeholder="Kosongkan jika tidak dirubah">
            @error('password')
                <span class="text-error-alt">{{ $message }}</span>
            @enderror
        </div>
        <div class="_tedx_form_group">
            <label for="phone_number" class="_tedx_link">
                <p>Nomor Handphone</p>
            </label>
            <input type="number" name="phone_number" value="{{ Auth::user()->phone_number }}">
            @error('phone_number')
                <span class="text-error-alt">{{ $message }}</span>
            @enderror
        </div>
        <div class="_tedx_form_group @if(session('warning')) not-filled @endif">
            <label for="street_address" class="_tedx_link">
                <p>Alamat Rumah</p>
            </label>
            <input type="text" name="street_address" value="{{ Auth::user()->street_address }}" placeholder="{{Auth::user()->street_address ? Auth::user()->street_address : 'Belum Disimpan'}}">
            @error('street_address')
                <span class="text-error-alt">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="_tedx_submit_button">
        <div class="_tedx_link">
            <button>Simpan Perubahan</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
@if (session('warning'))
<script>
    Toast.fire({
        icon: 'warning',
        title: @json(session('warning'))
    })
</script>
@endif
@if (session('success'))
<script>
    Toast.fire({
        icon: 'success',
        title: @json(session('success'))
    })
</script>
@endif
@endpush