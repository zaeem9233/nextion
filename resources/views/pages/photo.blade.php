@extends('layout.main')

@section('title', 'View Photo')

@section('content')

@foreach($photo as $row)
  <div class="card">
      <div class="card-header">
        <h2>{{ $row['title'] }}</h2>
      </div>
      <div class="card-body">
        <div class="row text-center">
          <div class="col-md-12 ">
            <img src="{{ $row['url'] }}" alt="{{ $row['title'] }}" title="{{ $row['title'] }}" />
          </div>
        </div>
      </div>
  </div>
@endforeach

@endsection