@extends('admin.base')

@section('content')
<div class="container ps-0 ms-0">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col-4">
                    <div class="card bg-primary text-white mt-3">
                        <div class="card-body">
                            <h2 class="display-3">55+</h2>
                            <h5>Total Products</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg-danger text-white mt-3">
                        <div class="card-body">
                            <h2 class="display-3">535</h2>
                            <h5>Total Orders</h5>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card bg-success text-white mt-3">
                        <div class="card-body">
                            <h2 class="display-3">127</h2>
                            <h5>Total Users</h5>
                        </div>
                    </div>
                </div>
            
            <div class="col-4">
                <div class="card bg-dark text-white mt-3">
                    <div class="card-body">
                        <h2 class="display-3">55+</h2>
                        <h5>Total Products</h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card bg-info text-white mt-3">
                    <div class="card-body">
                        <h2 class="display-3">535</h2>
                        <h5>Total Payments</h5>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card  bg-warning text-white mt-3">
                    <div class="card-body">
                        <h2 class="display-3">127</h2>
                        <h5>Total Users</h5>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
</div>
@endsection