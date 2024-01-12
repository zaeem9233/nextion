@extends('layout.auth')

@section('title', 'Home | Nextion')

@section('content')

  <div class="container mt-5">
      <div class="card text-center mx-auto" style="max-width: 400px;">
          <div class="card-body">
            
            <x-show-logo-auth />

            <h2 class="card-title">Access to Dashboard</h2>
            <div class="mt-4">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                <a href="{{ route('register') }}" class="btn btn-success">Register</a>
            </div>
          </div>
      </div>
  </div>

@endsection