@extends('layout.main')

@section('title', 'Dashboard')

@section('content')

<div class="row">
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-primary">Check Clients</h5>
        <p class="card-text">View clients information, posts, albums and images.</p>
        <div class="row">
          <div class="col-md-12 text-center">
            <a href="#" class="btn btn-primary">Clients</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-primary">Profile Settings</h5>
        <p class="card-text">View your profile setting like name, email etc.</p>
        <div class="row">
          <div class="col-md-12 text-center">
            <a href="{{ route('profile') }}" class="btn btn-primary">Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-md-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-danger">Logout</h5>
        <p class="card-text">Do not leave dashboard open for security reasons.</p>
        <div class="row">
          <div class="col-md-12 text-center">
            <a href="#" class="btn btn-danger">Logout</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection