@extends('masteradmin')
@section('title')
    Teacher Details
@endsection

@section('content')
    <div class="title text-center my-3">
        <h2 class="text-primary">{{ $teacher->teacherName }} Details</h2>
    </div>
    <div class="row justify-content-center py-4">
    <div class="col-lg-8 col-md-10">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h5 class="mb-0">Teacher Details</h5>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped align-middle text-center">
                    <thead class="table-light">
                        <tr>
                            <th>Teacher ID</th>
                            <th>Teacher Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Photo</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $teacher->id }}</td>
                            <td>{{ $teacher->Name }}</td>
                            <td>{{ $teacher->Phone }}</td>
                            <td>{{ $teacher->Email }}</td>
                            <td>
                                <img src="{{ asset('upload/teachers/'.$teacher->photo) }}" alt="No Image" class="img-thumbnail" style="max-width: 100px;">
                            </td>
                            <td>{{ $teacher->Status }}</td>
                        </tr>
                        <tr>
                            <td colspan="6" class="text-center">
                                <div class="d-grid gap-2 d-md-flex justify-content-center">
                                    <a href="{{ route('admin.teacher.edit', $teacher->id) }}" class="btn btn-sm btn-primary">
                                        Edit Teacher
                                    </a>

                                    <form action="{{ route('admin.teacher.delete', $teacher->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this teacher?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            Delete Teacher
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection