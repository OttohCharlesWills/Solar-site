@extends('layouts.app')

@section('content')

<style>

/*===============================
    LOGIN PAGE
===============================*/

body{
    margin:0;
    background:#081426;
    font-family:Inter,sans-serif;
}

.login-page{

    min-height:100vh;

    display:flex;

    justify-content:center;

    align-items:center;

    padding:40px;

    position:relative;

    overflow:hidden;

    background:
    radial-gradient(circle at top right,rgba(47,127,255,.18),transparent 35%),
    linear-gradient(135deg,#07111f,#0f1e3b);

}

/* glowing circles */

.login-page::before{

    content:"";

    position:absolute;

    width:700px;
    height:700px;

    border-radius:50%;

    right:-260px;
    top:-260px;

    background:
    radial-gradient(rgba(47,127,255,.18),transparent 70%);

}

.login-page::after{

    content:"";

    position:absolute;

    width:500px;
    height:500px;

    border-radius:50%;

    left:-180px;
    bottom:-180px;

    background:
    radial-gradient(rgba(47,127,255,.08),transparent 70%);

}

/* animated grid */

.login-grid{

    position:absolute;

    inset:0;

    background-image:

    linear-gradient(rgba(255,255,255,.05) 1px,transparent 1px),

    linear-gradient(90deg,rgba(255,255,255,.05) 1px,transparent 1px);

    background-size:42px 42px;

    mask-image:linear-gradient(180deg,transparent,black 15%,black 85%,transparent);

    animation:gridMove 20s linear infinite;

}

@keyframes gridMove{

from{

background-position:0 0;

}

to{

background-position:42px 42px;

}

}

/* card */

.login-card{

    position:relative;

    z-index:2;

    width:100%;

    max-width:470px;

    background:rgba(255,255,255,.06);

    backdrop-filter:blur(20px);

    border:1px solid rgba(255,255,255,.08);

    border-radius:28px;

    padding:50px;

    box-shadow:0 35px 90px rgba(0,0,0,.35);

}

.login-logo{

    text-align:center;

    margin-bottom:35px;

}

.login-logo img{

    width:90px;

    margin-bottom:20px;

}

.login-logo h2{

    color:#fff;

    font-weight:700;

    margin-bottom:10px;

}

.login-logo p{

    color:#b6c2d4;

    margin:0;

}

.form-label{

    color:#d9e6ff;

    margin-bottom:8px;

    font-weight:600;

}

.form-control{

    height:56px;

    background:rgba(255,255,255,.05);

    border:1px solid rgba(255,255,255,.08);

    color:#fff;

    border-radius:14px;

}

.form-control:focus{

    background:rgba(255,255,255,.08);

    border-color:#2f7fff;

    box-shadow:0 0 0 .25rem rgba(47,127,255,.18);

    color:#fff;

}

.form-control::placeholder{

    color:#9fb3cf;

}

.form-check-label{

    color:#d9e6ff;

}

.btn-login{

    width:100%;

    height:56px;

    border:none;

    border-radius:14px;

    background:#2f7fff;

    color:#fff;

    font-weight:700;

    transition:.35s;

}

.btn-login:hover{

    background:#4c91ff;

    transform:translateY(-2px);

    box-shadow:0 20px 35px rgba(47,127,255,.35);

}

.forgot{

    color:#76b5ff;

    text-decoration:none;

}

.forgot:hover{

    color:#fff;

}

.invalid-feedback{

    display:block;

}

@media(max-width:600px){

.login-card{

padding:35px 25px;

}

}

</style>

<div class="login-page">

    <div class="login-grid"></div>

    <div class="login-card">

        <div class="login-logo">

            {{-- Replace with your logo --}}
            <img src="{{ asset('/logo.png') }}" alt="Xtream">

            <h2>Welcome Back</h2>

            <p>Sign in to Xtream Services Administration</p>

        </div>

        <form method="POST" action="{{ route('login') }}">

            @csrf

            <div class="mb-4">

                <label class="form-label">Email Address</label>

                <input
                    type="email"
                    name="email"
                    class="form-control @error('email') is-invalid @enderror"
                    value="{{ old('email') }}"
                    required
                    autofocus
                    placeholder="Enter your email">

                @error('email')

                    <span class="invalid-feedback">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

            </div>

            <div class="mb-4">

                <label class="form-label">Password</label>

                <input
                    type="password"
                    name="password"
                    class="form-control @error('password') is-invalid @enderror"
                    required
                    placeholder="Enter your password">

                @error('password')

                    <span class="invalid-feedback">

                        <strong>{{ $message }}</strong>

                    </span>

                @enderror

            </div>

            <div class="d-flex justify-content-between align-items-center mb-4">

                <div class="form-check">

                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="remember"
                        id="remember">

                    <label class="form-check-label" for="remember">

                        Remember Me

                    </label>

                </div>

                @if(Route::has('password.request'))

                    <a href="{{ route('password.request') }}" class="forgot">

                        Forgot Password?

                    </a>

                @endif

            </div>

            <button class="btn-login">

                Secure Login

            </button>

        </form>

    </div>

</div>

@endsection