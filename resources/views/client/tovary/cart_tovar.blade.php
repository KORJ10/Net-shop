@extends('client.layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@400;600;700;800&family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/cart_tovar.css') }}">
@section('content')


    <div class="wrapper">
        <div class="block-1">
            <div class="slider middle" >

                <div class="sliders">

                    <input type="radio" name="r" id ="r1" checked >
                    <input type="radio" name="r" id ="r2" >



                    <div class="slide s1"><img src="images/product1.png" alt=""></div>
                    <div class="slide"><img src="images/iphoneMain.png" alt=""></div>








                </div>
                <div class="navigation">


                    <label for="r1" class="bar"></label>
                    <label for="r2" class="bar"></label>


                </div>


            </div>
            <div class="text_Tovar_Cart">
                <div class="heading">Смартфон Sumsung Galaxy A23 6/128GB</div>
                <div class="subheading">
                    <span class="price">28 891 сом</span> <span class="price-1">33 990 сом</span>
                </div>
                <div class="button-buy-div">
                    <a href="{{ route('product.cart', ['id' => 1]) }}">
                        <button class="buy-button">
                            <span class="button-text">В корзину</span>
                        </button>
                    </a>
                </div>
            </div>
        </div>

        </div>
    <div class="text-left-slider">
        <h1 class="Description-features">Описание</h1>
        <p class="Text-Desp">Получите всё и сразу. 6,6-дюймовый TFT-дисплей Galaxy A23 с
            V-образным вырезом позволяет видеть и делать больше. С технологией FHD+ и частотой обновления 90 Гц контент всегда будет оставаться четким и плавным.
            Простые изящные изгибы Ambient Edge безупречно соединяют камеру с корпусом Galaxy A23. Тонкий и симметричный смартфон Galaxy A23 выполнен в черном, белом, голубом и персиковом цветах.
            Делайте бесподобные фото с системой из четырех камер
            Запечатлейте ценные моменты во всех деталях
            с основной камерой 50 Мп. Расширьте угол обзора с ультраширокоугольной камерой. Камера с датчиком глубины поможет настроить фокус, а макрообъектив — снять всё до мельчайших деталей.
            Технология OIS. Наконец-то в Galaxy A23
            Запечатлейте мир в движении. Снимайте невероятно плавные видео и запечатлейте мельчайшие детали даже при слабом освещении благодаря технологии OIS на Galaxy A23.
            Заряд на весь день
            Будьте на шаг впереди с надежным аккумулятором. Делайте что угодно, не беспокоясь о заряде, с аккумулятором 5000 мА·ч (стандартная емкость). Galaxy A23 с супербыстрой зарядкой до 25 Вт поможет вам держать привычный ритм жизни.
            Выйдите за рамки привычного прослушивания с технологией Dolby Atmos
            Просто подключите наушники — и переместитесь в эпицентр музыки и фильмов. Ощутите, как громкий объемный звук обволакивает вас со всех сторон с технологией Dolby Atmos.
        </p>
        <h1 class="Description-features">Характеристики</h1>
        <p class="Text-Desp">Процессор
            Частота процессора2.4 ГГц, 1.9 ГГц

            Тип процессораВосьмиядерный
            Экран
            Размер основного экрана167.2 мм (6.6")

            Разрешение основного экрана1080 x 2408 (FHD+)


        </p>
    </div>



@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/cart_tovar.css') }}">
@endpush

@push('js')
    <scripts></scripts>
@endpush
