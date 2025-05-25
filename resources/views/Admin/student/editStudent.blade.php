@extends('masteradmin')

@section('title')
    Update Student
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style><div class="row mt-0">
    <div class="col-md-8 offset-md-2">
        <div class="card shadow rounded-4 border-0">
            <div class="card-header bg-primary text-white text-center rounded-top-4">
                <h4 class="mb-0">Update Student</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.student.update', $student->id) }}" method="POST">
                    @csrf

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Student Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="Name" class="form-control rounded-pill" value="{{ $student->Name }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" name="Phone" class="form-control rounded-pill" value="{{ $student->Phone }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Date of Birth</label>
                        <div class="col-sm-8">
                            <input type="date" name="Birth" class="form-control rounded-pill" value="{{ $student->Birth }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Gender</label>
                        <div class="col-sm-8 d-flex align-items-center gap-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Gender" value="Male" {{ $student->Gender == 'Male' ? 'checked' : '' }}>
                                <label class="form-check-label">Male</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="Gender" value="Female" {{ $student->Gender == 'Female' ? 'checked' : '' }}>
                                <label class="form-check-label">Female</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Class</label>
                        <div class="col-sm-8">
                            <select name="Class" class="form-select rounded-pill">
                                @foreach ($classes as $class)
                                    <option value="{{ $class->className }}" {{ $student->Class == $class->className ? 'selected' : '' }}>{{ $class->className }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input type="text" name="Address" class="form-control rounded-pill" value="{{ $student->Address }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Father Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="FatherName" class="form-control rounded-pill" value="{{ $student->fatherName }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Father Phone</label>
                        <div class="col-sm-8">
                            <input type="text" name="FatherPhone" class="form-control rounded-pill" value="{{ $student->fatherPhone }}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-sm-4 col-form-label">Status</label>
                        <div class="col-sm-8">
                            <select name="Status" class="form-select rounded-pill">
                                <option value="Publish" {{ $student->Status == 'Publish' ? 'selected' : '' }}>Publish</option>
                                <option value="Unpublish" {{ $student->Status == 'Unpublish' ? 'selected' : '' }}>Unpublish</option>
                            </select>
                        </div>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary rounded-pill px-4">Update Student Info</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection