{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}



@extends('layouts.app')

@section('content')

<style>

body{
    margin:0;
    background:#081426;
    font-family:Inter,sans-serif;
}

.register-blocked{

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    position:relative;

    overflow:hidden;

    background:
    radial-gradient(circle at top right,rgba(47,127,255,.18),transparent 35%),
    linear-gradient(135deg,#07111f,#0f1e3b);

}

/* Animated Grid */

.register-blocked::before{

    content:"";

    position:absolute;

    inset:0;

    background-image:
    linear-gradient(rgba(255,255,255,.05) 1px,transparent 1px),
    linear-gradient(90deg,rgba(255,255,255,.05) 1px,transparent 1px);

    background-size:45px 45px;

    animation:gridMove 18s linear infinite;

    opacity:.45;

}

@keyframes gridMove{

from{

background-position:0 0;

}

to{

background-position:45px 45px;

}

}

/* Glow */

.glow{

    position:absolute;

    width:600px;

    height:600px;

    border-radius:50%;

    background:radial-gradient(rgba(47,127,255,.18),transparent 70%);

    top:-250px;

    right:-250px;

}

/* Card */

.block-card{

    position:relative;

    z-index:2;

    width:90%;

    max-width:560px;

    padding:55px;

    border-radius:28px;

    background:rgba(255,255,255,.06);

    backdrop-filter:blur(18px);

    border:1px solid rgba(255,255,255,.08);

    text-align:center;

    box-shadow:0 35px 90px rgba(0,0,0,.35);

}

/* Barrier */

.barrier{

    width:140px;

    height:20px;

    margin:0 auto 35px;

    border-radius:30px;

    background:repeating-linear-gradient(
    -45deg,
    #ffb000 0 18px,
    #1a1a1a 18px 36px);

    animation:swing 2s ease-in-out infinite;

    box-shadow:0 0 25px rgba(255,176,0,.35);

}

@keyframes swing{

0%{

transform:rotate(-4deg);

}

50%{

transform:rotate(4deg);

}

100%{

transform:rotate(-4deg);

}

}

.block-card h1{

    color:white;

    font-size:2.3rem;

    margin-bottom:18px;

}

.block-card p{

    color:#b9c6da;

    line-height:1.8;

    font-size:1.05rem;

    margin-bottom:35px;

}

.notice{

    display:inline-block;

    padding:10px 22px;

    border-radius:40px;

    background:rgba(47,127,255,.12);

    border:1px solid rgba(47,127,255,.3);

    color:#7cb8ff;

    font-weight:600;

    margin-bottom:30px;

}

.login-btn{

    display:inline-block;

    padding:15px 34px;

    border-radius:12px;

    background:#2f7fff;

    color:#fff;

    text-decoration:none;

    font-weight:600;

    transition:.35s;

}

.login-btn:hover{

    background:#4d94ff;

    transform:translateY(-3px);

    color:#fff;

    box-shadow:0 15px 35px rgba(47,127,255,.35);

}

.floating-dot{

    position:absolute;

    width:10px;

    height:10px;

    border-radius:50%;

    background:#2f7fff;

    animation:float 4s ease-in-out infinite;

}

.floating-dot:nth-child(1){

left:10%;

top:20%;

}

.floating-dot:nth-child(2){

right:15%;

top:65%;

animation-delay:1s;

}

.floating-dot:nth-child(3){

left:20%;

bottom:15%;

animation-delay:2s;

}

@keyframes float{

0%,100%{

transform:translateY(0);

opacity:.5;

}

50%{

transform:translateY(-20px);

opacity:1;

}

}

</style>

<div class="register-blocked">

    <div class="glow"></div>

    <span class="floating-dot"></span>
    <span class="floating-dot"></span>
    <span class="floating-dot"></span>

    <div class="block-card">

        <div class="barrier"></div>

        <div class="notice">

            ADMINISTRATION PORTAL

        </div>

        <h1>Registration Disabled</h1>

        <p>

            This road ends here.

            New administrator accounts cannot be created from this page.

            All users are created and managed internally by the
            <strong style="color:#fff;">Xtream Services Super Administrator</strong>.

        </p>

        <a href="{{ route('login') }}" class="login-btn">

            ← Return to Login

        </a>

    </div>

</div>

@endsection