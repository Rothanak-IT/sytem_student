@extends('masteradmin')

@section('title')
    Add Book
@endsection

@section('content')
<style>
td{
    padding: 4px !important;
}
</style>
<style>
    .form-label {
        font-weight: 600;
        color: #333;
    }

    .form-table td {
        vertical-align: middle;
        padding: 0.75rem;
    }

    @media (max-width: 576px) {
        .form-table td {
            display: block;
            width: 100%;
        }

        .form-table td:first-child {
            margin-bottom: 0.25rem;
            font-weight: 600;
        }
    }
</style>

<div class="row mt-5">
    <div class="col-md-6 offset-md-3">
        <h3 class="text-center text-primary mb-4">Add New Book to Library</h3>

        <form action="{{ route('admin.library.added') }}" method="POST" class="form-group" novalidate>
            @csrf
            <table class="table table-borderless form-table">
                <tr>
                    <td><label for="bookName" class="form-label">Book Name</label></td>
                    <td><input type="text" id="bookName" name="bookName" class="form-control" placeholder="Enter book name" required></td>
                </tr>
                <tr>
                    <td><label for="bookAuthor" class="form-label">Book Author</label></td>
                    <td><input type="text" id="bookAuthor" name="bookAuthor" class="form-control" placeholder="Enter author name" required></td>
                </tr>
                <tr>
                    <td><label for="bookPrice" class="form-label">Book Price</label></td>
                    <td><input type="number" id="bookPrice" name="bookPrice" class="form-control" min="0" step="0.01" placeholder="Enter price in USD" required></td>
                </tr>
                <tr>
                    <td><label for="bookQuantity" class="form-label">Book Quantity</label></td>
                    <td><input type="number" id="bookQuantity" name="bookQuantity" class="form-control" min="1" placeholder="Enter quantity" required></td>
                </tr>
                <tr>
                    <td><label for="bookCategory" class="form-label">Book Category</label></td>
                    <td>
                        <select name="bookCategory" id="bookCategory" class="form-control" required>
                            <option value="" disabled selected>Select a category</option>
                            <option value="Academic Book">Academic Book</option>
                            <option value="Non Academic Book">Non Academic Book</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="bookStatus" class="form-label">Status</label></td>
                    <td>
                        <select name="bookStatus" id="bookStatus" class="form-control" required>
                            <option value="published" selected>Published</option>
                            <option value="unpublished">Unpublished</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" class="btn btn-primary btn-block">Save Book</button></td>
                </tr>
            </table>
        </form>
    </div>
</div>

@endsection