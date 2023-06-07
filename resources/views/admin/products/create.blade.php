@extends('client.layouts.app')
@section('content')

    <div class="container">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <input type="number" class="form-control" id="exampleInputEmail1" name="price" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Image</label>
                <input type="file" class="form-control" id="exampleInputEmail1" name="photo" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="description" aria-describedby="emailHelp">
            </div>
{{--            <div class="mb-3">--}}
{{--                <label for="exampleInputEmail1" class="form-label">Category</label>--}}
{{--                <input type="number" class="form-control" id="exampleInputEmail1" name="category_id" aria-describedby="emailHelp">--}}
{{--            </div>--}}
{{--            <div class="mb-3">--}}
{{--                <label for="exampleInputEmail1" class="form-label">Comment</label>--}}
{{--                <input type="number" class="form-control" id="exampleInputEmail1" name="Comment_id" aria-describedby="emailHelp">--}}
{{--            </div>--}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
