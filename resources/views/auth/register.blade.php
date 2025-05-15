@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card shadow-lg p-4 rounded border-0" style="max-width: 400px; width: 100%; background: #fff;">
        
        <!-- Logo Ataraxia -->
        <div class="text-center">
            <h2 class="mb-3" style="font-family: 'Dash Horizon', sans-serif !important; color: #5b2e91; font-weight: bold;">Ataraxia</h2>
            <p class="text-muted">Create your account</p>
        </div>

    <!-- Right Side (Form Register) -->
    <div class="d-flex flex-column justify-content-center align-items-center col-md-6 bg-white">
        <div class="w-75" style="max-width: 400px;">
            <h3 class="text-center fw-bold mb-4">Register</h3>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <input type="text" name="name" class="form-control rounded-pill @error('name') is-invalid @enderror" placeholder="Nama" value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="email" name="email" class="form-control rounded-pill @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" name="phone" class="form-control rounded-pill @error('phone') is-invalid @enderror" placeholder="Nomor Telepon" value="{{ old('phone') }}" required>
                    @error('phone')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label d-block text-muted">Jenis Kelamin</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="genderLaki" value="laki-laki" {{ old('gender') == 'laki-laki' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="genderLaki">laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="genderPerempuan" value="perempuan" {{ old('gender') == 'perempuan' ? 'checked' : '' }} required>
                        <label class="form-check-label" for="genderPerempuan">perempuan</label>
                    </div>
                    @error('gender')
                        <div><span class="text-danger small">{{ $message }}</span></div>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="text" name="username" class="form-control rounded-pill @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required>
                    @error('username')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="password" name="password" class="form-control rounded-pill @error('password') is-invalid @enderror" placeholder="Password" required>
                    @error('password')
                        <span class="text-danger small">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <input type="password" name="password_confirmation" class="form-control rounded-pill" placeholder="Konfirmasi Password" required>
                </div>

                <!-- Register Button -->
                <div class="mt-3">
                    <button type="submit" class="btn w-100 fw-bold text-white" style="background: #5b2e91; border: none; font-size: 18px;">
                        <i class="fas fa-user-plus"></i> {{ __('Register') }}
                    </button>
                </div>

                <!-- Already have an account? -->
                <div class="text-center mt-3">
                    <p class="text-dark">Already have an account? <a href="{{ route('login') }}" class="text-decoration-none fw-bold" style="color: #5b2e91;">Login here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Font & Icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://fonts.cdnfonts.com/css/dash-horizon" rel="stylesheet">
@endsection
