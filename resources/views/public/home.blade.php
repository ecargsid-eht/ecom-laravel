@extends('public.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="list-group list-group-flush">
                    @foreach ($categories as $cat)
                        
                    <a href="" class="list-group-item list-group-item-action">{{$cat->cat_title}}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-9 mt-3">
                <div class="row">
                    @foreach ($products as $pro)
                    <div class="col-3">
                        <div class="card">
                            <img src="{{ asset('images/'.$pro->image) }}" alt="" class="card-img-top" style="object-fit: cover;height:220px">
                            <div class="card-body">
                                <strong>{{$pro->title}}</strong>
                                <p class="m-0 p-0">Rs. {{$pro->discount_price}}/- <del>{{$pro->price}}/-</del> </p>
                                <p class="m-0 p-0">{{$pro->category->cat_title}}</p>
                                <a href="{{ route('single_view', ['p_id'=>$pro->id]) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection