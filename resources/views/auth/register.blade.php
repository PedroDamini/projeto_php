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
                <form method="POST" id="registerForm" onsubmit="return validatePassword();" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <input id="name" type="text" class="form-control input-login @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Digite seu nome">
                            <span class="input-icon">
                                <i class="bi bi-person-fill"></i>
                            </span>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <input id="email" type="email" class="form-control input-login @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Digite seu email">
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
                            <input type="password" name="password" id="password" class="form-control input-password @error('password') is-invalid @enderror" required pattern=".{8,}" title="A senha deve ter no mínimo 8 caracteres" autocomplete="new-password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;">
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
                        <div class="input-group">
                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-password" required autocomplete="new-password" placeholder="Confirme sua senha">
                            <span class="input-icon">
                                <i class="bi bi-key"></i>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-login btn-block">Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function validatePassword(event) {
        const password = document.getElementById("password");
        const passwordConfirmation = document.getElementById("password_confirmation");

        if (password.value !== passwordConfirmation.value) {
            alert("As senhas não coincidem!");
            event.preventDefault();
            return false;
        }
        return true;
    }

    const registerForm = document.getElementById("registerForm");
    registerForm.addEventListener('submit', validatePassword);
</script>
@endsection
