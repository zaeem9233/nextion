@extends('layout.main')

@section('title', 'Profile Settings')

@section('content')

<div class="row">
  <div class="col-md-4 col-sm-8 col-xs-12 mx-auto">
    <div class="card">
        <div class="card-header">
          <h2>Profile Basic Settings</h2>
        </div>
        @php
          $email = auth()->user()->email;
          $name = auth()->user()->name;
        @endphp
        <div class="card-body">
          <form action="{{ route('profile.update') }}" method="post">
          
            @csrf

            <x-input name="name" type="text" id="name" title="Name" value="{{ (old('name')!==null)? old('name') : $name }}" message="{{ (isset($message))? $message : null }}"  />

            <x-input name="email" type="email" id="email" title="Email" value="{{ (old('email')!==null)? old('email') : $email }}" message="{{ (isset($message))? $message : null }}"  />
            
            <div class="mt-4 d-grid gap-2">
              <x-submit-button text="Update Profile" />

              <x-reset-button />
            </div>

          </form>
          

        </div>
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="col-md-4 col-sm-8 col-xs-12 mx-auto">
    <div class="card">
        <div class="card-header">
          <h2>Change Password</h2>
        </div>
        <div class="card-body">
          
          <form action="{{ route('profile.password.update') }}" method="post">
          
            @csrf

            <x-input name="current_password" type="password" id="current_password" title="Current Password" value="" message="{{ (isset($message))? $message : null }}"  />
          
            <x-input name="password" type="password" id="password" title="Password" value="" message="{{ (isset($message))? $message : null }}"  />

            <x-input name="password_confirmation" type="password" id="confirm_password" title="Confirm Password" value="" message="{{ (isset($message))? $message : null }}"  />

            <div class="mt-4 d-grid gap-2">
              <x-submit-button text="Change Password" />

              <x-reset-button />
            </div>

          </form>

        </div>
    </div>
  </div>
</div>

@endsection