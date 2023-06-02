@extends('client.layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@400;600;700;800&family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/cart_tovar.css') }}">
@section('content')


    <div class="wrapper">
        <div class="Tovar_Cart">
            <div class="sliderC">
                <div class="main-cardC">
                    <img src="images/product1.png" alt="Main ImageC" class="main-imageC">
                </div>
                <div class="thumbnailsC">
                    <img src="images/AsusTuf.png" alt="Thumbnail 1C" class="thumbnailC">
                    <img src="image3.jpg" alt="Thumbnail 2C" class="thumbnailC">
                    <img src="image4.jpg" alt="Thumbnail 3C" class="thumbnailC">
                </div>
            </div>
            <div class="text_Tovar_Cart">
                <div class="heading">Смартфон Sumsung Galaxy A23 6/128GB</div>
                <div class="subheading">
                    <span class="price">28 891 сом</span> <span class="price-1">33 990 сом</span>
                </div>
            </div>
        </div>
        <div class="text_Tovar_Cart">
            <div class="heading">Смартфон Sumsung Galaxy A23 6/128GB</div>
            <div class="subheading">
                <span class="price">28 891 сом</span> <span class="price-1">33 990 сом</span>
            </div>
        </div>
    </div>
    <div class="button-buy-div">
        <a href="{{ route('product.cart', ['id' => 1]) }}">
            <button class="buy-button">
                <span class="button-text"></span>
            </button>
        </a>
    </div>

    </div>

@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/cart_tovar.css') }}">
@endpush

@push('js')
    <scripts></scripts>
@endpush
