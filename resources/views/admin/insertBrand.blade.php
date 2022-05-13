@extends('admin.base')

@section('content')
<div class="container ps-0 ms-0">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9 mt-3">
            <h3>Insert Category Here</h3>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('brand.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="">Brand Title</label>
                            <input type="text" name="brand_title" value="{{ old('brand_title') }}" class="form-control">
                            @error('brand_title')
                            <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <input type="submit" value="SUBMIT CATEGORY" class="btn btn-success fs-5 fw-bold w-100">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection