@extends('layout.auth')

@section('title', 'Home | Nextion')

@section('content')

  <div class="container mt-5">
      <div class="card text-center mx-auto" style="max-width: 400px;">
          <div class="card-body">
              <h2 class="card-title">Access to Dashboard</h2>
              <div class="btn-group-vertical mt-4">
                  <a href="/login" class="btn btn-primary">Login</a>

                  <a href="/register" class="btn btn-success">Register</a>
              </div>
          </div>
      </div>
  </div>

@endsection