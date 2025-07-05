@extends('master')

@section('title')
  Login Page
@endsection

@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Sign In</h5>

          @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              {{ session('error') }}
            </div>
          @endif

          <form class="form-group" action="{{ route('admin.login') }}" method="POST">
            @csrf

            {{-- Email --}}
            <input type="text" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email">
            @error('email')
              <small class="text-danger">{{ $message }}</small>
            @enderror

            {{-- Password --}}
            <input type="password" class="form-control my-3" name="password" placeholder="Password">
            @error('password')
              <small class="text-danger">{{ $message }}</small>
            @enderror

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>

            <a href="{{ route('admin.register.form') }}" class="btn btn-lg btn-secondary btn-block text-uppercase mt-2">
              Register
            </a>

            <hr class="my-4">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('singlePageStyle')
  <style>
    .card-signin {
      border: 0;
      border-radius: 1rem;
      box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
    }

    .card-signin .card-title {
      margin-bottom: 2rem;
      font-weight: 300;
      font-size: 1.5rem;
    }

    .card-signin .card-body {
      padding: 2rem;
    }

    .form-signin {
      width: 100%;
    }

    .form-signin .btn {
      font-size: 80%;
      border-radius: 5rem;
      letter-spacing: .1rem;
      font-weight: bold;
      padding: 1rem;
      transition: all 0.2s;
    }
  </style>
@endsection
