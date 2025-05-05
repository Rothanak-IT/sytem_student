@extends('masteradmin')

@section('title', 'Create Assignment')

@section('content')
    <div class="container mt-5">
        <h2 class="text-primary text-center">Create Assignment</h2>

        <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Teacher Name</label>
                <input type="text" name="teacher" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Course Name</label>
                <input type="text" name="course" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="form-group">
                <label>Due Date</label>
                <input type="date" name="due_date" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="file">Assignment File (PDF, DOC, DOCX only)</label>
                <input type="file" name="file" class="form-control">
            </div>

            <button type="submit" class="btn btn-success mt-2">Create Assignment</button>
        </form>
    </div>
@endsection