@extends('layout.main')

@section('title', 'Client Details')

@section('content')
<div class="row">
    <div class="col-md-6 mx-auto">
        <!-- User Profile Card -->
        <div class="card">
            <div class="card-header">
                <h4>Client Profile</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <!-- User Avatar -->
                        <img src="https://via.placeholder.com/150" alt="User Avatar" class="img-fluid rounded-circle">
                    </div>
                    <div class="col-md-9">
                        <!-- User Information -->
                        <h3>{{ $client['name'] }}</h3>
                        <p>Email: {{ $client['email'] }}</p>
                        <p>Location: {{ $client['address']['city'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="card">
            <div class="card-body">
    
                
                <!-- Profile Tabs -->
                <ul class="nav nav-tabs mt-4">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#photos">Photos</a>
                    </li>
                </ul>
    
                <!-- Tab Content -->
                <div class="tab-content mt-3">
                    <!-- Profile Tab -->
                    <div class="tab-pane fade show active" id="profile">
                        <h4>Client Information</h4>
                        <p>Email: {{ $client['email'] }}</p>
                        <p>Username: {{ $client['username'] }}</p>
                        <p>Address: {{ $client['address']['street'] }}, {{ $client['address']['suite'] }}, {{ $client['address']['city'] }}</p>
                        <p>Zipcode: {{ $client['address']['zipcode'] }}</p>
                        <p>Geo Location: {{ $client['address']['geo']['lat'] }}, {{ $client['address']['geo']['lng'] }}</p>
                        <p>Phone: {{ $client['phone'] }}</p>
                        <p>Website: {{ $client['website'] }}</p>
                        <p>Company Name: {{ $client['company']['name'] }}</p>
                        <p>Company Mission: {{ $client['company']['catchPhrase'] }}</p>
                        <p>Company Business Category: {{ $client['company']['bs'] }}</p>
                    </div>
                    <!-- Posts Tab -->
                    <div class="tab-pane fade" id="posts">
                        <h4>Client Posts</h4>
                        
                        @foreach($posts as $post)
                            <h5>{{ $post['title'] }}</h5>
                            <p>{{ $post['body'] }}</p>
                            <hr class="my-1">
                        @endforeach

                    </div>
                    <!-- Photos Tab -->
                    <div class="tab-pane fade" id="photos">
                        <h4>Client Albums</h4>
                        
                        @foreach($albums as $album)
                            <h5>
                                <a href="{{ route('album', ['albumId'=>$album['id']]) }}" class="text-decoration-none">
                                    {{ $album['title'] }}
                                </a>
                            </h5>
                            <hr class="my-1">
                        @endforeach
                    
                    </div>
                </div>
    
            </div>
        </div>
    
        
    </div>
</div>


@endsection