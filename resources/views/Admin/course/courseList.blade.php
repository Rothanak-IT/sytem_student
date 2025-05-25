@extends('masteradmin')
@section('title')
    Course List
@endsection

@section('content')
<style>
th, td {
    text-align: center;
    vertical-align: middle;
}
</style>

<div class="container-fluid mt-5">
    <div class="text-center mb-4">
        <a href="#" class="btn btn-primary mr-2">Course Statistics</a>
        <a href="{{ route('course.create') }}" class="btn btn-primary ml-2">Add New Course</a>
    </div>

    <h3 class="text-primary text-center mb-4">List of Courses</h3>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Course ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->title }}</td>
                        <td>{{ $course->status }}</td>
                        <td>
                            <a href="{{ route('course.show', $course->id) }}" class="btn btn-success btn-sm">View Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
