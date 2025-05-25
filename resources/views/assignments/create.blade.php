@extends('masteradmin')

@section('title', 'Create Assignment')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h4 class="text-center text-primary mb-4">Create Assignment</h4>

                    <form action="{{ route('assignments.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                        @csrf

                        <div class="form-group mb-3">
                            <label for="teacher" class="form-label">Teacher Name</label>
                            <input type="text" id="teacher" name="teacher" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="course" class="form-label">Course Name</label>
                            <input type="text" id="course" name="course" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Assignment Title</label>
                            <input type="text" id="title" name="title" class="form-control" required>
                        </div>

                        <div class="form-group mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="description" name="description" class="form-control" rows="4" required></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="due_date" class="form-label">Due Date</label>
                            <input type="date" id="due_date" name="due_date" class="form-control" required>
                        </div>

                        <div class="form-group mb-4">
                            <label for="file" class="form-label">Assignment File <small class="text-muted">(PDF, DOC, DOCX)</small></label>
                            <input type="file" id="file" name="file" class="form-control" accept=".pdf,.doc,.docx">
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Create Assignment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
