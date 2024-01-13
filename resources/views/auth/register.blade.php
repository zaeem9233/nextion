@extends('layout.auth')

@section('title', 'Signup | Nextion')

@section('content')

<div class="container mt-5">
  <div class="card text-center mx-auto" style="max-width: 400px;">
      <div class="card-body">
        
        <x-show-logo-auth />

        <h2 class="card-title">Registration</h2>

        @if(session('error'))
          <div class="alert alert-danger mt-4" role="alert">
            {{ session('error') }}
          </div>
        @endif

        <form action="{{ route('register.save') }}" method="post" class="mt-4 text-left">
            
            @csrf

            <x-input name="name" type="text" id="name" title="Full Name" value="{{ old('name') }}" message="{{ (isset($message))? $message : null }}"  />
            
            <x-input name="email" type="email" id="email" title="Email" value="{{ old('email') }}" message="{{ (isset($message))? $message : null }}"  />

            <x-input name="password" type="password" id="password" title="Password" value="" message="{{ (isset($message))? $message : null }}"  />

            <x-input name="password_confirmation" type="password" id="confirm_password" title="Confirm Password" value="" message="{{ (isset($message))? $message : null }}"  />

            <div class="mt-4  d-grid gap-2">

              <x-submit-button text="Signup" iconClass="fas fa-user-plus" />

              <x-reset-button />
            
            </div>

            <hr class="my-4">

            <div class="text-center">
              <a href="{{ route('login') }}">Already have account?</a>
            </div>

        </form>
      </div>
  </div>
</div>

@endsection