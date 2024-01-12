@extends('layout.auth')

@section('title', 'Login | Nextion')

@section('content')

<div class="container mt-5">
  <div class="card text-center mx-auto" style="max-width: 400px;">
      <div class="card-body">
        
        <x-show-logo-auth />

        <h2 class="card-title">Login</h2>
        <form action="" method="post" class="mt-4 text-left">
            <x-input name="email" type="email" id="email" title="Email" value="" message="{{ (isset($message))? $message : null }}"  />

            <x-input name="password" type="password" id="password" title="Password" value="" message="{{ (isset($message))? $message : null }}"  />

            <div class="mt-4">
              <x-submit-button text="Login" />

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