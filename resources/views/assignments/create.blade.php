@extends('masteradmin')

@section('title', 'Create Assignment')

@section('content')
<div class="container">
    <h5 class="text-primary text-center">Create Assignment</h5>

    <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf

        <div class="">
            <label for="teacher" class="form-label">Teacher Name</label>
            <input type="text" id="teacher" name="teacher" class="form-control" required>
        </div>

        <div class="">
            <label for="course" class="form-label">Course Name</label>
            <input type="text" id="course" name="course" class="form-control" required>
        </div>

        <div class="">
            <label for="title" class="form-label">Title</label>
            <input type="text" id="title" name="title" class="form-control" required>
        </div>

        <div class="">
            <label for="description" class="form-label">Description</label>
            <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
        </div>

        <div class="">
            <label for="due_date" class="form-label">Due Date</label>
            <input type="date" id="due_date" name="due_date" class="form-control" required>
        </div>

        <div class="">
            <label for="file" class="form-label">Assignment File (PDF, DOC, DOCX only)</label>
            <input type="file" id="file" name="file" class="form-control" accept=".pdf,.doc,.docx">
        </div>

        <button type="submit" class="btn btn-primary w-100 mt-3">Create Assignment</button>
    </form>
</div>

@endsection