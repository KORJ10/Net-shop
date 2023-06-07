@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                {{ $product->id }}
            </div>
            <div class="col-12">
                {{ $product->name }}
            </div>
            <div class="col-12">
                {{ $product->price }}
            </div>
            <div class="col-12">
                {{ $product->description }}
            </div>
            <div class="col-12">
                {{ $product->category_id }}
            </div>
            <div class="col-12">
                {{ $product->photo}}
            </div>
        </div>
    </div>
@endsection
