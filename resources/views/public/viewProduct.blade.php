@extends('public.master')

@section('content')
<div class="container-fluid ps-0">
    <div class="row">
        <div class="col-3">
            @foreach ($categories as $cat)
            <a href="" class="list-group-item list-group-item-action">{{$cat->cat_title}}</a>
            @endforeach
        </div>
    
        <div class="col-9 mt-5">
            <div class="row">
                <div class="col-4">
                    <img src="{{ asset('images/'.$product->image) }}" alt="" class="w-100">
                </div>
    
                <div class="col-8">
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <td>{{$product->title}}</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>{{$product->category->cat_title}}</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><h5><del>{{$product->price}}/-</del></h5></td>
                        </tr>
                        <tr>
                            <th>Offer Price</th>
                            <td><h5>{{$product->discount_price}}/-</h5></td>
                        </tr>
                        <tr>
                            <th>Brand</th>
                            <td>{{$product->brand->brand_title}}</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>{{$product->qty}}</td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col">
                            <a href="" class="btn btn-success">Add to Cart</a>
                            <a href="" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="row mt-3">
                <div class="card">
                    <div class="card-header">Description</div>
                    <div class="card-body">
                        <p class="lead">{{$product->description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection