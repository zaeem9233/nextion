@extends('layout.auth')

@section('title', 'Home | Nextion')

@section('content')

  <div class="container mt-5">
      <div class="card text-center mx-auto" style="max-width: 400px;">
          <div class="card-body">
            
            <x-show-logo-auth />

            <h2 class="card-title">Email Verification Status</h2>
              <div class="alert mt-4" role="alert">
                {{ $message }}
              </div>
          </div>
      </div>
  </div>

@endsection