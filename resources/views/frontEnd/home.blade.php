@extends('master')

@section('title', 'StMS - Abdul Mabud')

@section('content')
  <!-- custom slider part start -->
  <div id="carouselId" class="carousel slide mb-4" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselId" data-slide-to="0" class="active"></li>
    <li data-target="#carouselId" data-slide-to="1"></li>
    <li data-target="#carouselId" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
    <div class="carousel-item active" style="margin-top: 50px;">
      <img src="{{ asset('custom/img/imgSlider/newlogo.jpg') }}" class="img-fluid w-100 d-block" alt="First slide"
      style="object-fit: cover; image-rendering: crisp-edges;">
    </div>
    </div>
  </div>
  <!-- custom slider part end -->

  <!-- teacher list start -->
  <div class="container">
    <div class="teacher my-5" id="teacher">
    <h3 class="text-center text-primary mb-4">List of our Teachers</h3>
    <div class="row">
      @foreach ($teachers as $teacher)
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
      <div class="card h-100">
      <img class="card-img-top img-fluid" src="{{ asset('upload/teachers/' . $teacher->photo) }}" alt="No Image"
      style="height:250px; object-fit:cover;">
      <div class="card-body d-flex flex-column">
      <h4 class="card-title">{{ $teacher->Name }}</h4>
      <p class="card-text">{{ $teacher->Email }}</p>
      <a href="#" class="btn btn-primary mt-auto">See Profile</a>
      </div>
      </div>
      </div>
    @endforeach
    </div>
    </div>

    <!-- noticeboard -->
    <div class="noticeboard my-5" id="noticeboard">
    <div class="text-center mb-3">
      <h3 class="text-primary">Noticeboard</h3>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
        <th>Date</th>
        <th>Notice</th>
        <th>Dept</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($notices as $notice)
      <tr>
      <td>{{ \Carbon\Carbon::parse($notice->created_at)->format('d-M-y') }}</td>
      <td><a href="{{ route('view.notice', $notice->id) }}" class="noticeTitle">{{ $notice->subject }}</a></td>
      <td>{{ $notice->dept }}</td>
      </tr>
      @endforeach
      </tbody>
      </table>
    </div>
    </div>

    <!-- courses -->
    <div class="courses my-5" id="course">
    <h3 class="text-center text-primary mb-4">List of our Courses</h3>
    <div class="row">
      @foreach ($coures as $course)
      <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
      <div class="card h-100">
      <img class="card-img-top img-fluid" src="{{ asset('upload/courses/' . $course->photo) }}" alt="No Image"
      style="height:250px; object-fit:cover;">
      <div class="card-body d-flex flex-column">
      <h4 class="card-title">{{ $course->title }}</h4>
      <a href="#" class="btn btn-primary mt-auto">Course Details</a>
      </div>
      </div>
      </div>
    @endforeach
    </div>
    </div>
  </div>
@endsection