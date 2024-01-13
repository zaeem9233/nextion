@extends('layout.auth')

@section('title', 'Login | Nextion')

@section('content')

<div class="container mt-5">
  <div class="card text-center mx-auto" style="max-width: 400px;">
      <div class="card-body">
        
        <x-show-logo-auth />

        <h2 class="card-title">Login</h2>

        @if(session('error'))
          <div class="alert alert-danger mt-4" role="alert">
            {{ session('error') }}
          </div>
        @endif

        <form action="{{ route('login.check') }}" method="post" class="mt-4 text-left">

            @csrf

            <x-input name="email" type="email" id="email" title="Email" value="{{ (old('email')!==null)? old('email') : 'test@example.com' }}" message="{{ (isset($message))? $message : null }}"  />

            <x-input name="password" type="password" id="password" title="Password" value="{{ (old('email')!==null)? '' : 'password' }}" message="{{ (isset($message))? $message : null }}"  />

            <div class="mt-4 d-grid gap-2">
              <x-submit-button text="Login" iconClass="fas fa-sign-in" />

              <x-reset-button />
            </div>

            <hr class="my-4">

            <div class="text-center">
              <a href="{{ route('register') }}">Don't have account?</a>
            </div>

        </form>
      </div>
  </div>
</div>

@endsection