@extends('layouts.member')

@section('link')
<a href="{{ url('member/dashboard') }}" cursor-class="hover">Kembali Ke Beranda</a>
@endsection

@section('content')
<form action="{{ url('member/permintaan-token') }}" method="POST">
    @csrf
    <div class="_tedx_wrapper_form">
        <div class="_tedx_form_group">
            <label for="first_name" class="_tedx_link">
                <p>Nama Depan</p>
            </label>
            <input id="first_name" type="text" name="first_name" value="{{ Auth::user()->first_name }}" readonly>
        </div>
        <div class="_tedx_form_group">
            <label for="last_name" class="_tedx_link">
                <p>Nama Belakang</p>
            </label>
            <input id="last_name" type="text" name="last_name" value="{{ Auth::user()->last_name }}" readonly>
        </div>
        <div class="_tedx_form_group">
            <label for="email_address" class="_tedx_link">
                <p>Alamat Email</p>
            </label>
            <input id="email_address" type="email" name="email_address" value="{{ Auth::user()->email_address }}" readonly>
        </div>
        <div class="_tedx_form_group">
            <label for="phone_number" class="_tedx_link">
                <p>Nomor Telepon</p>
            </label>
            <input id="phone_number" type="number" name="phone_number" value="{{ Auth::user()->phone_number }}" readonly>
        </div>
        <div class="_tedx_form_group">
            <label for="token" class="_tedx_link">
                <p>Token Tiket</p>
            </label>
            <input id="token" type="text" name="token">
            @error('token')
            <span class="text-error-alt">{{ $message }}</span>
            @enderror
        </div>
        <div class="_tedx_form_group">
            <label for="code" class="_tedx_link">
                <p>Kode Tiket</p>
            </label>
            <input id="code" type="text" name="code">
            @error('code')
            <span class="text-error-alt">{{ $message }}</span>
            @enderror
        </div>
        <div class="_tedx_form_group">
            <label for="reason" class="_tedx_link">
                <p>Berikan kami alasan atau penjelasan mengapa perlu refresh token</p>
            </label>
            <textarea id="reason" name="reason" cols="30" rows="10"></textarea>
            @error('reason')
            <span class="text-error-alt">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="_tedx_submit_button">
        <div class="_tedx_link">
            <button>Buat Permintaan</button>
        </div>
    </div>
</form>
@endsection

@push('scripts')
@if(session('error'))
<script>
    Toast.fire({
        icon: 'error',
        title: @json(session('error'))
    })
</script>
@endif
@if(session('warning'))
<script>
    Toast.fire({
        icon: 'warning',
        title: @json(session('warning'))
    })
</script>
@endif
@if(session('info'))
<script>
    Toast.fire({
        icon: 'info',
        title: @json(session('info'))
    })
</script>
@endif
@if(session('success'))
<script>
    Toast.fire({
        icon: 'success',
        title: @json(session('success'))
    })
</script>
@endif
@endpush