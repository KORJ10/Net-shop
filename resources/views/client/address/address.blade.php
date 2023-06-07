@extends('client.layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@400;600;700;800&family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/o_nas.css') }}">
@section('content')
    <div class="div-main-text">
        <span class="main-text">Адресс</span>
    </div>
    <div id="map" style="height: 400px;"></div>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=5de14492-4105-416d-b688-027f6f98c876"></script>
    <script>
        ymaps.ready(init);

        function init() {
            var myMap = new ymaps.Map('map', {
                center: [42.856939, 74.564489],
                zoom: 13
            });

            var myPlacemark = new ymaps.Placemark([42.856939, 74.564489], {
                hintContent: 'TechBazaar',
                balloonContent: 'Адрес: Бишкек, Красная улица, 122'
            });


            myMap.geoObjects.add(myPlacemark);
        }



    </script>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('css/address.css') }}">
@endpush

@push('js')
    <scripts></scripts>
@endpush

