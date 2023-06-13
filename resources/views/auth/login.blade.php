@extends('layouts.auth_layout')

@section('auth_content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6 logo-login">
            <div class="logo-container">
                <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" class="logo-img ">
            </div>
        </div>
        <div class="col-lg-6 login-right">
            <div class="blue-container">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <input type="email" id="email" class="form-control input-login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Digite seu email">
                            <span class="input-icon">
                                <i class="bi bi-envelope-fill"></i>
                            </span>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input type="password" id="password" class="form-control input-password @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
                            <span class="input-icon">
                                <i class="bi bi-key"></i>
                            </span>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-login btn-block">Entrar</button>
                    </div>
                    <div class="form-group">
                        <a class="btn-register-button" href="{{ route('register') }}">
                            Registrar-se
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
