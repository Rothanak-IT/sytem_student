@extends('masteradmin')

@section('title', 'Edit Assignment')

@section('content')
<div class="container">
    <h4 class="text-primary text-center ">Edit Assignment</h4>

    <form action="{{ route('assignments.update', $assignment->id) }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        @method('PUT')  <!-- Tells Laravel it's an update request -->

        <div class="">
            <label for="teacher" class="form-label">Teacher</label>
            
            <input type="text" id="teacher" name="teacher" class="form-control" 
                value="{{ old('teacher', $assignment->teacher) }}" required>
        </div>

        <div class="">
            <label for="course" class="form-label">Course</label>
            <input type="text" id="course" name="course" class="form-control" 
                value="{{ old('course', $assignment->course) }}" required>
        </div>

        <div class="">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" 
                value="{{ old('title', $assignment->title) }}" required>
        </div>

        <div class="">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" required>{{ old('description', $assignment->description) }}</textarea>
        </div>

        <div class="">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" id="due_date" name="due_date" class="form-control" 
                value="{{ old('due_date', $assignment->due_date) }}" required>
        </div>

        <div class="">
            <label for="file" class="form-label">Assignment File (PDF, DOC, DOCX only)</label>
            <input type="file" id="file" name="file" class="form-control" accept=".pdf,.doc,.docx">
            @if($assignment->file_path)
                <small class="form-text text-muted mt-1">
                    Current file: 
                    <a href="{{ asset('storage/' . $assignment->file_path) }}" target="_blank" rel="noopener noreferrer">
                        {{ basename($assignment->file_path) }}
                    </a>
                </small>
            @endif
        </div>

        <button type="submit" class="btn btn-warning mt-3 w-100">Update Assignment</button>
    </form>
</div>

@endsection
