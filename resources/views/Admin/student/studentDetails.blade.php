@extends('masteradmin')

@section('title')
    Student Details
@endsection

@section('content')
<div class="container py-4">
    <div class="text-center mb-4">
        <h4 class="text-primary">{{ $student->Name }}'s Details</h4>
    </div>

    <div class="row">
    <div class="col-12">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white text-center">
                <h5 class="mb-0">Student Information</h5>
            </div>

            <div class="card-body table-responsive">
                <table class="table table-bordered table-striped table-hover align-middle text-center">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>DOB</th>
                            <th>Gender</th>
                            <th>Class</th>
                            <th>Address</th>
                            <th>Father's Name</th>
                            <th>Father's Phone</th>
                            <th>Attend Days</th>
                            <th>Absent Days</th>
                            <th>Status</th>
                            <th>Actions</th> 
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->Name }}</td>
                            <td>{{ $student->Phone }}</td>
                            <td>{{ $student->Birth }}</td>
                            <td>{{ $student->Gender }}</td>
                            <td>{{ $student->Class }}</td>
                            <td>{{ $student->Address }}</td>
                            <td>{{ $student->fatherName }}</td>
                            <td>{{ $student->fatherPhone }}</td>
                            <td>
                                {{ $totalAttend }} / {{ $totalDays }}
                                @if($totalDays > 0)
                                    <br><small class="text-success">({{ number_format(($totalAttend / $totalDays) * 100, 2) }}%)</small>
                                @endif
                            </td>
                            <td>
                                {{ $totalAbsend }} / {{ $totalDays }}
                                @if($totalDays > 0)
                                    <br><small class="text-danger">({{ number_format(($totalAbsend / $totalDays) * 100, 2) }}%)</small>
                                @endif
                            </td>
                            <td>
                                <span class="badge {{ $student->Status == 'Active' ? 'bg-success' : 'bg-secondary' }}">
                                    {{ $student->Status }}
                                </span>
                            </td>
                            <td>
                                <div class="d-flex flex-column gap-1">
                                    <a href="{{ route('admin.student.edit', $student->id) }}" class="btn btn-sm btn-outline-primary w-100">
                                        Edit
                                    </a>
                                    <form action="{{ route('admin.student.delete', $student->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger w-100">
                                            Delete
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

</div>
@endsection
