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
                        <a href="{{ route('product.create') }}" class="btn btn-success">Add new Product</a>
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

                    @foreach ($products as $pro)
                        <tr>
                            <td>{{$pro->id}}</td>
                            <td>{{$pro->title}}</td>
                            <td>{{$pro->brand->brand_title}}</td>
                            <td>{{$pro->category->cat_title}}</td>
                            <td>{{$pro->price}}</td>
                            <td>{{$pro->qty}}</td>
                            <td><img src="../images/{{$pro->image}}" alt="" width="30px"></td>
                            <td>
                                <a href="{{ route('product.edit', [$pro]) }}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection