@extends('masteradmin')

@section('title', 'Manage Assignments')

@section('content')
<div class="container mt-5">
    <h2 class="text-primary text-center">Manage Assignments</h2>
    <a href="{{ route('assignments.create') }}" class="btn btn-success mb-3">Add Assignment</a>

    <table class="table table-bordered">
    <thead class="bg-primary text-white">
        <tr>
            <th>ID</th>
            <th>Teacher Name</th>
            <th>Course Name</th>
            <th>Title</th>
            <th>Description</th>
            <th>Dealine</th>
            <th>File</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($assignments as $assignment)
            <tr>
                <td>{{ $assignment->id }}</td>
                <td>{{ $assignment->teacher }}</td>
                <td>{{ $assignment->course }}</td>
                <td>{{ $assignment->title }}</td>
                <td>{{ $assignment->description }}</td>
                <td>{{ $assignment->due_date }}</td>
                <td>
                    @if($assignment->file_path)
                        <a href="{{ Storage::url($assignment->file_path) }}" target="_blank">Download</a>
                    @else
                        No File
                    @endif
                </td>
                <td>
                    <a href="{{ route('assignments.show', $assignment->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('assignments.edit', $assignment->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('assignments.destroy', $assignment->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection
