@extends('masteradmin')
@section('title')
    Teacher List
@endsection

@section('content')
<style>
th, td {
    text-align: center;
    vertical-align: middle;
}
</style>

<div class="container-fluid mt-5">
    <div class="text-center mb-4">
        <button class="btn btn-primary mr-2" id="teacherCalBtn">Teacher Statistics</button>
        <a href="{{ route('admin.teacher.add') }}" class="btn btn-primary ml-2">Add New Teacher</a>
    </div>

    <div class="row justify-content-center mb-4">
        <div class="col-12 col-md-8">
            <div id="result"></div>
        </div>
    </div>

    <h3 class="text-primary text-center mb-4">List of Teachers</h3>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="bg-primary text-white">
                <tr>
                    <th>Teacher ID</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->Name }}</td>
                        <td>{{ $teacher->Phone }}</td>
                        <td>{{ $teacher->Email }}</td>
                        <td>
                            <a href="{{ route('admin.teacher.details', $teacher->id) }}" class="btn btn-success btn-sm">View Details</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('singlePageScript')
<script>
    $('#teacherCalBtn').click(function () {
        $.ajax({
            url: '{{ route('admin.tecacher.cal') }}',
            method: 'GET',
            cache: false,
            success: function (data) {
                $('#result').html(data);
            }
        });
    });
</script>
@endsection
