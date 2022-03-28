<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="../../css/easion.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="../../js/chart-js-config.js"></script>
    <title>@yield('title', $title)</title>
</head>

@extends('app')
@section('content')
<div class="row">
    <div class="col-xl-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('user.update', $row) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="card easion-card">
                <div class="card-header">
                    <div class="easion-card-icon">
                        <i class="fas fa-chart-bar"></i>
                    </div>
                    <div class="easion-card-title"> Edit Data User </div>
                </div>
                <div class="card-body ">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email address <span class="text-danger">*</span></label>
                            <input class="form-control" type="email" name="email" value="{{ old('email', $row->email) }}" />
                        </div>
                        <div class="form-group">
                            <label>Username <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="username" value="{{ old('username', $row->username) }}" />
                        </div>

                        <div class="form-group">
                            <label>Phone <span class="text-danger">*</span></label>
                            <input class="form-control" type="text" name="phone" value="{{ old('phone', $row->phone) }}" />
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary">Save</button>
                            <a class="btn btn-danger" href="{{ route('user.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection




                    
                    