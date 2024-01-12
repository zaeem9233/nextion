@extends('layout.auth')

@section('title', 'Login | Nextion')

@section('content')

<div class="container mt-5">
  <div class="card text-center mx-auto" style="max-width: 400px;">
      <div class="card-body">
        
        <div class="d-flex justify-content-center mb-4">
            <img src="/images/logo.png" alt="Logo" class="img-fluid" style="max-height: 50px;">
        </div>

        <h2 class="card-title">Login</h2>
        <form action="" method="post" class="mt-4 text-left">
            <x-input name="email" type="email" id="email" title="Email" value="" message="{{ (isset($message))? $message : null }}"  />

            <x-input name="password" type="password" id="password" title="Password" value="" message="{{ (isset($message))? $message : null }}"  />

            <div class="mt-4">
              <button class="btn btn-primary btn-block" type="submit">
                Login
              </button>
              <button class="btn btn-secondary btn-block" type="reset">
                Reset
              </button>
            </div>

            <hr class="my-4">

            <div class="text-center">
              <a href="{{ route('register') }}">Already have account?</a>
            </div>

        </form>
      </div>
  </div>
</div>

@endsection