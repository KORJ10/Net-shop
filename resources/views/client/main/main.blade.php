@extends('client.layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@400;600;700;800&family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('JS/main.js') }}"></script>


@section('content')


<head>



</head>
<body>
<div class="block-1">
    <div class="Catalog">
        <div class="v1602_2096">
            <span class="v1602_2094">Каталог</span>
            <button class="catal_button">
                <p class="v1602_2095">• Компьютеры </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Ноутбуки </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Консоли </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Смартфоны </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Планшеты </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Клавиатуры </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Мышки </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Наушники </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Микрофоны </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Геймпады </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Мониторы </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Комплектующие </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• VR оборудование </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Для дома </p>
            </button>
            <button class="catal_button">
                <p class="v1602_2095">• Аксессуары </p>
            </button>

        </div>

        <div class="name"></div>
    </div>
    <div class="sliderMAIN">
        <p class="Popular">Популярное за неделю</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width: 850px; height: 550px;">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/asus.jpg" alt="Первый слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/samsung.jpeg" alt="Второй слайд">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/xiTelephone.jpg" alt="Третий слайд">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
</div>
<div class="tableRec">

    <div class="qualities">
        <div class="descr">
            <img src="images/img1.png" alt="" class="quality_img">
            <p class="descr_text">БЫСТРАЯ ДОСТАВКА ВСЕГО ЗА ДЕНЬ ДО ВАШЕГО ПОРОГА (3 ДНЯ ДО ДРУГИХ РЕГИОНОВ)</p>
        </div>

        <div class="descr">
            <img src="images/img2.png" alt="" class="quality_img">
            <p class="descr_text">ДОСТАВКА ПО БИШКЕКУ И ВСЕМ РЕГИОНАМ КЫРГЫЗСТАНА</p>
        </div>

        <div class="descr">
            <img src="images/img3.png" alt="" class="quality_img">
            <p class="descr_text">ОПЛАТА ЛЮБЫМ УДОБНЫМ ДЛЯ ВАС СПОСОБОМ</p>
        </div>

        <div class="descr">
            <img src="images/img4.png" alt="" class="quality_img">
            <p class="descr_text">РЕАЛЬНЫЕ ОТЗЫВЫ О НАШИХ ТОВАРАХ</p>
        </div>

        <div class="descr">
            <img src="images/img5.png" alt="" class="quality_img">
            <p class="descr_text">ТЕХНИЧЕСКАЯ ПОДДЕРЖКА ВСЕГДА НА СВЯЗИ</p>
        </div>

        <div class="descr">
            <img src="images/img6.png" alt="" class="quality_img">
            <p class="descr_text">ЧАСТЫЕ СКИДКИ И РАСПРОДАЖИ ТОВАРОВ</p>
        </div>

        <div class="descr">
            <img src="images/img7.png" alt="" class="quality_img">
            <p class="descr_text">ГАРАНТИЯ БЕЗОПАСНОСТИ ПЛАТЕЖЕЙ</p>
        </div>

        <div class="descr">
            <img src="images/img8.png" alt="" class="quality_img">
            <p class="descr_text">ВОЗВРАТ СРЕДСТВ В ТЕЧЕНИИ НЕДЕЛИ</p>
        </div>

        <div class="descr">
            <img src="images/img9.png" alt="" class="quality_img">
            <p class="descr_text">ВОЗВРАТ БРАКОВАННЫХ ТОВАРОВ</p>
        </div>

        <div class="descr">
            <img src="images/img10.png" alt="" class="quality_img">
            <p class="descr_text">СЕРТИФИЦИРОВАННЫЙ И ИМПОРТНЫЕ ТОВАРЫ</p>
        </div>

        <div class="descr">
            <img src="images/img11.png" alt="" class="quality_img">
            <p class="descr_text">ТОВАРЫ ПРОДАЮТСЯ БЕЗ НАЦЕНОК</p>
        </div>
    </div>

</div>

<div class="ADD_new_Price">
    <div class="container">
        <div class="price_card">
            <div class="title">Новая цена !</div>
            <div class="price_zone">
                <p class="first_price">84 480сом</p>
                <p class="discount">-25%</p>
                <p class="second_price">112 640сом</p>
            </div>

            <div class="button-buy-div">
                <a href="{{ route('product.cart', ['id' => 1]) }}">
                    <button class="buy-button">
                        <span class="button-text">Купить</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="image-new-sale">
            <img src="images/iphoneMain.png" alt="" class="imgSaleMain">
        </div>
    </div>

    <div class="container2">
        <div class="price_card2">
            <div class="title2">Скидки!</div>
            <div class="price_zone2">
                <p class="first_price2">52 317сом</p>
                <p class="discount2">-25%</p>
                <p class="second_price2">69 756сом</p>
            </div>

            <div class="button-buy-div2">
                <a href="{{ route('cart_tovar', ['id' => 1]) }}">
                    <button class="buy-button">
                        <span class="button-text2">Купить</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="image-new-sale2">
            <img src="images/ipadMain.png" alt="" class="imgSaleMain2">
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="Promotions_and_discounts">
        <span class="Promotions_and_discounts_Main_text">Акции и скидки % </span>
        {{--        <span class="procent">%</span>--}}
        <div class="containerSLIDER">
            <div class="slider">
                <div id="carouselExampleCaptions" class="carousel slide">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="{{ route('cart_tovar', ['id' => 1]) }}">
                                <img src="images/iphone14.png" class="d-block img-fluid" alt="..." style="margin-left: 455px; width: 500px">
                                <div class="carousel-caption d-none d-md-block custom-caption">
                                    <h5>Iphone 14</h5>
                                    <p>84 480 сом</p>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ route('cart_tovar', ['id' => 2]) }}">
                                <img src="images/AsusTuf.png" class="d-block img-fluid" alt="..." style="margin-left: 455px; width: 500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Ноутбук Asus TUF Gaming/RTX 3070 4GB</h5>
                                    <p>61 871 сом</p>
                                </div>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a href="{{ route('cart_tovar', ['id' => 3]) }}">
                                <img src="images/SumesungPad.png" class="d-block img-fluid" alt="..." style="margin-left: 455px; width: 500px">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Планшет Samsung Galaxy Tab A8</h5>
                                    <p>23 196 сом</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>

    </div>

</div>

    <div class="wrapper">
        <h2 class="TechNewsVideo">В мире технологий</h2>
        <div class="video-section">
            <div class="video-container">
                <iframe width="460" height="315" src="https://www.youtube.com/embed/110NLsfdh2E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe width="460" height="315" src="https://www.youtube.com/embed/Y_sfTryl-eY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="video-container">
                <iframe width="460" height="315" src="https://www.youtube.com/embed/otfUzTnW9XM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>

    </div>










</body>


@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
        /*h1 {*/
        /*    color: red;*/
        /*}*/
    </style>
@endpush

@push('js')
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="/examples/libs/ui-components/itc-slider/itc-slider.css" rel="stylesheet">
    <script src="{{ asset('JS/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

@endpush
