@extends('masteradmin')

@section('title')
    Update Course
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6">
            <div class="card shadow-lg">
                <div class="card-body">
                    <h3 class="text-center text-primary">Update Course</h3>

                    <div class=" text-center">
                        <img src="{{ asset('upload/courses/' . $course->photo) }}" alt="Course Image" class="img-fluid rounded shadow-sm" style="max-height: 300px; object-fit: contain;">
                    </div>

                    <form action="{{ route('course.update', $course->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="">
                            <label for="title" class="form-label">Course Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $course->title }}" required>
                        </div>

                        <div class="">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description" id="description" rows="4" class="form-control" required>{{ $course->description }}</textarea>
                        </div>

                        <div class="">
                            <label for="photo" class="form-label">Change Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>

                        <div class="">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="status" class="form-select">
                                <option value="1" {{ $course->status == '1' ? 'selected' : '' }}>Publish</option>
                                <option value="0" {{ $course->status == '0' ? 'selected' : '' }}>Unpublish</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Update Course</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
