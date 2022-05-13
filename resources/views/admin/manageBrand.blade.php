@extends('admin.base')

@section('content')
    <div class="container ps-0 ms-0">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9 mt-3">
                <div class="row">
                    @if (Session::has("success"))
                    <div class="alert alert-success bg-success text-white">
                        {{Session::get("success")}}
                    </div>
                @endif
                @if (Session::has("error"))
                    <div class="alert alert-danger bg-danger text-white">
                        {{Session::get("error")}}
                    </div>
                @endif
                    <div class="col-8">
                        <h6 class="fs-4">Manage Brand</h6>
                    </div>
                    <div class="col-4">
                        <a href="{{ route('brand.create') }}" class="btn btn-success">Add new Brand</a>
                    </div>
                </div>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($brand as $br)
                        <tr>
                            <td>{{$br->id}}</td>
                            <td>{{$br->brand_title}}</td>
                            <td>
                                <form action="{{ route('brand.destroy',[$br]) }}" method="post" class="d-inline">
                                    @csrf
                                    @method("delete")
                                    <input type="submit" value="X" class="btn btn-danger">
                                </form>

                                <a href="{{ route('brand.edit', [$br]) }}" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection