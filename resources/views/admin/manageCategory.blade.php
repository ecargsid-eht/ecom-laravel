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
                    <h6 class="fs-4">Manage Categories</h6>
                </div>
                <div class="col-4">
                    <a href="{{ route('category.create') }}" class="btn btn-success">Add new Category</a>
                </div>
            </div>
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Category Title</th>
                    <th>Parent</th>
                    <th>Action</th>
                </tr>

                @foreach ($category as $cat)
                <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->cat_title}}</td>
                    @if ($cat->parent_id == 0)
                        <td>main</td>
                    @else
                    <td>{{$cat->parent->cat_title}}</td>
                    @endif
                    <td>
                        <form action="{{ route('category.destroy',$cat) }}" class="d-inline" method="post">
                            @csrf
                            @method("delete")
                            <input type="submit" value="X" class="btn btn-danger">
                        </form>
                        <a href="{{ route('category.edit', [$cat]) }}" class="btn btn-success">Edit</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection