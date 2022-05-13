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
                        <h6 class="fs-4">Manage Products</h6>
                    </div>
                    <div class="col-4">
                        <a href="" class="btn btn-success">Add new Product</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Brand</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Qty</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection