@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100" style="background: linear-gradient(135deg,rgb(0, 0, 0), #5b2e91);">
    <div class="card shadow-lg p-4 rounded border-0" style="max-width: 400px; width: 100%; background: #fff;">
        <div class="card-header text-center rounded" style="background: #5b2e91; color: #fff;">
            <h2 class="mb-0" style="font-family: 'Dash Horizon', sans-serif;">Ataraxia</h2>
        </div>
        
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <div class="input-group border rounded">
                        <span class="input-group-text bg-white border-0">
                            <i class="fa fa-user text-muted"></i>
                        </span>
                        <input id="email" type="email" class="form-control border-0 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus placeholder="Email">
                    </div>
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <div class="input-group border rounded">
                        <span class="input-group-text bg-white border-0">
                            <i class="fa fa-lock text-muted"></i>
                        </span>
                        <input id="password" type="password" class="form-control border-0 @error('password') is-invalid @enderror" name="password" required placeholder="Password">
                    </div>
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                    @if (Route::has('password.request'))
                        <a class="text-decoration-none" href="{{ route('password.request') }}" style="color: #5b2e91;">
                            {{ __('Forgot Password?') }}
                        </a>
                    @endif
                </div>

                <div class="mt-3">
                    <button type="submit" class="btn btn-dark w-100 fw-bold" style="background: #5b2e91; border: none;">
                        <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}
                    </button>
                </div>

                <div class="text-center mt-3">
                    <p class="text-dark">Belum punya akun? <a href="{{ route('register') }}" class="text-decoration-none fw-bold" style="color: #5b2e91;">Daftar sekarang</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Tambahkan Font & Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://fonts.cdnfonts.com/css/dash-horizon" rel="stylesheet">
@endsection
