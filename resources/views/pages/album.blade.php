@extends('layout.main')

@section('title', 'Album Photos')

@section('content')

<div class="card">
    <div class="card-header">
      <h2>@yield('title')</h2>
    </div>
    <div class="card-body">
      <div class="row text-center">
        @foreach($photos as $photo)
        <div class="col-md-2 col-sm-4 col-6 my-2">
          <a href="{{ route('photo', ['photoId'=>$photo['id']]) }}" target="blank">
            <img src="{{ $photo['thumbnailUrl'] }}" alt="{{ $photo['title'] }}" title="{{ $photo['title'] }}" />
          </a>
        </div>
        @endforeach
      </div>
    </div>
</div>

@endsection