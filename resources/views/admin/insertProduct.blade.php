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
                    <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Title</label>
                            <input type="text" value="{{old('title')}}" name="title" class="form-control">
                                
                            @error('title')
                            <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Category </label>
                            <select name="category_id" value="{{ old('category_id') }}" class="form-select">
                                @foreach ($categories as $cat)
                                <option value="{{$cat->id}}">{{$cat->cat_title}}</option>    
                                @endforeach
                            </select>
                            @error('category_id')
                            <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Brand </label>
                            <select name="brand_id" value="{{ old('brand_id') }}" class="form-select">
                                @foreach ($brands as $br)
                                <option value="{{$br->id}}">{{$br->brand_title}}</option>    
                                @endforeach
                            </select>
                            @error('brand_id')
                            <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Image</label>
                            <input type="file" name="image"  class="form-control">
                                
                            @error('image')
                            <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="">Description</label>
                            <textarea  name="description" class="form-control">{{old('description')}}"</textarea>
                                
                            @error('description')
                            <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Price</label>
                            <input type="number" value="{{old('price')}}" name="price" class="form-control">
                                
                            @error('price')
                            <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Discount Price</label>
                            <input type="number" value="{{old('discount_price')}}" name="discount_price" class="form-control">
                                
                            @error('discount_price')
                            <p class="small text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Quantity</label>
                            <input type="number" value="{{old('qty')}}" name="qty" class="form-control">
                                
                            @error('qty')
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