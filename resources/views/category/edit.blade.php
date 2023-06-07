@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('categories.update', $category) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleFormControlInput1">ID</label>
            <input type="number" min="1" value="{{ $category->id }}" class="form-control" name="id" id="exampleFormControlInput1" placeholder="Введите ID ">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Название</label>
            <textarea class="form-control" name="name" id="exampleFormControlTextarea1" rows="3">{{ $category->name}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Сохранить</button>
    </form>
</div>
@endsection
