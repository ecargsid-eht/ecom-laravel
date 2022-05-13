@extends('public.master')

@section('content')
<div class="container-fluid ps-0">
    <div class="row">
        <div class="col-3">
            <a href="" class="list-group-item list-group-item-action">Item 1</a>
            <a href="" class="list-group-item list-group-item-action">Item 2</a>
            <a href="" class="list-group-item list-group-item-action">Item 3</a>
            <a href="" class="list-group-item list-group-item-action">Item 4</a>
            <a href="" class="list-group-item list-group-item-action">Item 5</a>
            <a href="" class="list-group-item list-group-item-action">Item 6</a>
            <a href="" class="list-group-item list-group-item-action">Item 7</a>
            <a href="" class="list-group-item list-group-item-action">Item 8</a>
            <a href="" class="list-group-item list-group-item-action">Item 9</a>
        </div>
    
        <div class="col-9 mt-5">
            <div class="row">
                <div class="col-4">
                    <img src="http://via.placeholder.com/500.jpg" alt="" class="w-100">
                </div>
    
                <div class="col-8">
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <td>This is product Title</td>
                        </tr>
                        <tr>
                            <th>Category</th>
                            <td>Mobile</td>
                        </tr>
                        <tr>
                            <th>Price</th>
                            <td><h5><del>600/-</del></h5></td>
                        </tr>
                        <tr>
                            <th>Offer Price</th>
                            <td><h5>200/-</h5></td>
                        </tr>
                        <tr>
                            <th>Brand</th>
                            <td>TCS</td>
                        </tr>
                        <tr>
                            <th>Quantity</th>
                            <td>44</td>
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
                        <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id totam fugiat commodi ea. Eum voluptates veniam quaerat. Itaque sunt, asperiores alias deleniti laboriosam omnis odio ut vero maiores numquam recusandae iste excepturi officia at sint dolore cupiditate? Deleniti, voluptatem blanditiis!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection