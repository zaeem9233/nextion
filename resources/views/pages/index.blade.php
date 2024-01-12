@extends('layout.auth')

@section('title', 'Home | Nextion')

@section('content')

  <div class="container mt-5">
      <div class="card text-center mx-auto" style="max-width: 400px;">
          <div class="card-body">
            
            <x-show-logo-auth />

            <h2 class="card-title">Access to Dashboard</h2>

            @if(session('success'))
              <div class="alert alert-danger mt-4" role="alert">
                {{ session('success') }}
              </div>
            @endif

            <div class="mt-4">
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                <a href="{{ route('register') }}" class="btn btn-success">Register</a>
            </div>
          </div>
      </div>
  </div>

@endsection