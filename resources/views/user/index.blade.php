@extends('app')
@section('content')
@if(session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif
    <main class="dash-content">
                <div class="container-fluid">
                <h2 class="dash-title">@yield('title', $title)</h2>
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card easion-card">
                                <div class="card-header">
                                    <div class="easion-card-icon">
                                        <i class="fas fa-table"></i>
                                    </div>
                                    <div class="easion-card-title">User Profile</div>
      
                                </div>
                                <div class="card-body ">
                                    
                                    <table class="table table-hover table-in-card">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Email Address</th>
                                                <th scope="col">Phone Number</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <?php $no = 1 ?>
                                        @foreach($rows as $row)
                                        <tbody>
                                            
                                            <tr>
                                                <td>{{ $row->id }}</td>
                                                <td>{{ $row->username }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->phone }}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-primary" href="{{ route('user.edit', $row) }}">Edit User</a>
                                                </td>
                                            </tr>
                                            
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </main>
@endsection