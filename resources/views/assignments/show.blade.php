@extends('masteradmin')

@section('title', 'Assignment Details')

@section('content')
<div class="container mt-5">
    <h2 class="text-primary text-center">Assignment Details</h2>

    <table class="table table-bordered">
        <tr>
            <th>Assignment ID</th>
            <td>{{ $assignment->id }}</td>
        </tr>
        <tr>
            <th>Course Name</th>
            <td>{{ $assignment->course }}</td>
        </tr>
        <tr>
            <th>Teacher Name</th>
            <td>{{ $assignment->teacher }}</td>
        </tr>
        <tr>
            <th>Title</th>
            <td>{{ $assignment->title }}</td>
        </tr>
        <tr>
            <th>Description</th>
            <td>{{ $assignment->description }}</td>
        </tr>
        <tr>
            <th>Due Date</th>
            <td>{{ $assignment->due_date }}</td>
        </tr>
        <tr>
            <th>Assignment File</th>
            <td>
                @if($assignment->file_path)
                    <a href="{{ Storage::url($assignment->file_path) }}" target="_blank">Download File</a>
                @else
                    No file uploaded.
                @endif
            </td>
        </tr>
    </table>

    <a href="{{ route('assignments.index') }}" class="btn btn-secondary">Back to Assignments</a>
    <a href="{{ route('assignments.edit', $assignment->id) }}" class="btn btn-warning">Edit Assignment</a>
</div>
@endsection
