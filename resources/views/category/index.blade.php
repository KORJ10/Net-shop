@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <a href="{{ route('categories.create') }}">Создать</a>
        </div>
    </div>
    @foreach($categories as $category)
        <div class="row">
            <div class="col-1 mt-3">
                {{ $category->id }}
            </div>
            <div class="col-1 mt-3">
                {{ $category->name }}
            </div>
            <div class="col-4 mt-3 d-flex">

                <button type="button" class="btn btn-outline-primary"><a href="{{ route('categories.edit', $category) }}" class="btn">Изменить</a></button>
                <form id="delete-form-{{ $category->id }}" action="{{ route('categories.destroy', $category) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" form="delete-form-{{ $category->id }}" class="btn btn-danger">Удалить</button>
                </form>

            </div>
            <div class="col-2">
            </div>
        </div>
@endforeach
@endsection
