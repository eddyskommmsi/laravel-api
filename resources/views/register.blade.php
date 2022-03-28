<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Laravel API Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.login-form {
    width: 340px;
    margin: 50px auto;
}
.login-form form {        
    margin-bottom: 15px;
    background: #f7f7f7;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    padding: 30px;
}
.login-form h2 {
    margin: 0 0 15px;
}
.form-control, .btn {
    min-height: 38px;
    border-radius: 2px;
}
.input-group-addon .fa {
    font-size: 18px;
}
.btn {        
    font-size: 15px;
    font-weight: bold;
}
.bottom-action {
  	font-size: 14px;
}
</style>
</head>
<body>
    <br>
    <br>

<div class="login-form">
    <form action="{{route('registerApi')}}" method="post">
        @csrf
        <h2 class="text-center">Register</h2>
        @if(\Session::has('error'))
                <div id="error" class=" alert  alert-danger">
                    {!! \Session::get('error')!!}
                </div>
        @endif


        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" placeholder="Enter Fullname">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-user"></span>
                    </span>                    
                </div>
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" value="{{old('username')}}" placeholder="Enter Username">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-at"></span>
                    </span>                    
                </div>
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" placeholder="Enter Email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group">
        	<div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="fa fa-phone"></span>
                    </span>                    
                </div>
                <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}" placeholder="Enter Phone">
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        

		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" value="{{old('password')}}"" placeholder="Enter Password" >
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        

		<div class="form-group">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" name="c_password" class="form-control @error('c_password') is-invalid @enderror" value="{{old('c_password')}}"" placeholder="Enter Confirm Password" >
                @error('c_password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
        </div>
        

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Sign Up</button>
        </div>
    </form>
    <p class="text-center small">Already Registered? <a href="{{route('login')}}">Sign In here</a>.</p>
</div>
</body>
</html>