@extends('admin.base')

@section('content')
    <div class="container ps-0 ms-0">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9 mt-3">
                <div class="row">
                    <div class="col-8">
                        <h6 class="fs-4">Manage Categories</h6>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-success">Add new Category</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Contact</th>
                        <th>Street</th>
                        <th>Landmark</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Type</th>
                        <th>Pincode</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection