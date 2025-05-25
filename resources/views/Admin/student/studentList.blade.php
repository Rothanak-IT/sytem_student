@extends('masteradmin')

@section('title')
    Student List
@endsection

@section('content')
<style>
    th, td {
        text-align: center;
        vertical-align: middle;
    }
</style>

<div class="mt-5 text-center">
    <p>
        <button class="btn btn-primary mr-2" id="studentCalBtn">Student Statistics</button>
        <a href="{{ route('admin.student.add') }}" class="btn btn-primary ml-2">Add New Student</a>
    </p>
</div>

<div class="row">
    <div class="col-md-6 offset-md-3">
        <div id="result"></div>
    </div>
</div>

<h3 class="text text-primary text-center mt-5">List of Students</h3>

<div class="row">
    <div class="col-12">
        <!-- Make table responsive -->
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="bg-primary text-white">
                    <tr>
                        <th>Student Id</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Class</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->Name }}</td>
                            <td>{{ $student->Phone }}</td>
                            <td>{{ $student->Class }}</td>
                            <td>
                                <a href="{{ route('admin.student.details', $student->id) }}" class="btn btn-success btn-sm">View Details</a>
                            </td>
                        </tr>
                    @endforeach  
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('singlePageScript')
<script>
    $('#studentCalBtn').click(function () {
        $.ajax({
            url: '{{ route('admin.student.cal') }}',
            method: 'GET',
            cache: false,
            success: function (data) {
                $('#result').html(data);
            }
        });
    });
</script>
@endsection
