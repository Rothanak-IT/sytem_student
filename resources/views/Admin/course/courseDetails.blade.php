@extends('masteradmin')
@section('title')
    Course Details
@endsection

@section('content')
<div class="container">
    <div class="text-center">
        <h2 class="text-primary">{{ $course->title }} Details</h2>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body">
                @if($course->photo)
                    <div class="mb-4 text-center">
                        <img src="{{ asset('upload/courses/'.$course->photo) }}" alt="Course Image" class="img-fluid rounded shadow-sm">
                    </div>
                    @endif
                    <table class="table table-bordered mb-4">
                        <tr>
                            <th style="width: 40%;">Course ID</th>
                            <td>{{ $course->id }}</td>
                        </tr>
                        <tr>
                            <th>Course Title</th>
                            <td>{{ $course->title }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{{ $course->description }}</td>
                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{ $course->status }}</td>
                        </tr>
                    </table>

                   

                    <a href="{{ route('course.edit', $course->id) }}" class="btn btn-primary btn-block mb-2">
                        Edit Course
                    </a>

                    <form action="{{ route('course.destroy', $course->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this course?');">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete Course" class="btn btn-danger btn-block">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
