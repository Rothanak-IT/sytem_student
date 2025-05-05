@extends('masteradmin')

@section('title', 'Edit Assignment')

@section('content')
<div class="container mt-5">
    <h2 class="text-primary text-center">Edit Assignment</h2>

    <form action="{{ route('assignments.update', $assignment->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')  <!-- This tells Laravel it's an update request -->
        
        <div class="form-group">
            <label for="teacher">Teacher</label>
            <input type="text" name="teacher" class="form-control" value="{{ old('teacher', $assignment->teacher) }}" required>
        </div>
        <div class="form-group">
            <label for="course">Course</label>
            <input type="text" name="course" class="form-control" value="{{ old('course', $assignment->course) }}" required>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $assignment->title) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" rows="4" required>{{ old('description', $assignment->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="due_date">Due Date</label>
            <input type="date" name="due_date" class="form-control" value="{{ old('due_date', $assignment->due_date) }}" required>
        </div>

        <div class="form-group">
            <label for="file">Assignment File (PDF, DOC, DOCX only)</label>
            <input type="file" name="file" class="form-control">
            @if($assignment->file_path)
                <small class="form-text text-muted">
                    Current file: <a href="{{ asset('storage/' . $assignment->file_path) }}" target="_blank">{{ basename($assignment->file_path) }}</a>
                </small>
            @endif
        </div>

        <button type="submit" class="btn btn-warning mt-2">Update Assignment</button>
    </form>
</div>
@endsection
