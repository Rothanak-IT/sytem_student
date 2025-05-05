@extends('master')

@section('title', 'Admin Register')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Admin Register</h5>
          <form action="{{ route('admin.register') }}" method="POST">
            @csrf

            <input type="text" class="form-control my-2" name="name" value="{{ old('name') }}" placeholder="Name">
            @error('name') <small class="text-danger">{{ $message }}</small> @enderror

            <input type="email" class="form-control my-2" name="email" value="{{ old('email') }}" placeholder="Email">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror

            <input type="password" class="form-control my-2" name="password" placeholder="Password">
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror

            <input type="password" class="form-control my-2" name="password_confirmation" placeholder="Confirm Password">

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
