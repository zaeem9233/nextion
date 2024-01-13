@extends('layout.main')

@section('title', 'Clients')

@section('content')

<div class="card">
    <div class="card-header">
      <h2>@yield('title')</h2>
    </div>
    <div class="card-body">

        <div class="container">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $client)
                        
                        <tr>
                            <td>{{ $client['id'] }}</td>
                            <td>{{ $client['name'] }}</td>
                            <td>{{ $client['username'] }}</td>
                            <td>{{ $client['email'] }}</td>
                            <td>
                                <a href="{{ route('client', ['id' => $client['id']]) }}" class="btn btn-primary btn-sm">
                                    <i class="fas fa-eye"></i> View
                                </a>
                            </td>
                        </tr>
                        
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection