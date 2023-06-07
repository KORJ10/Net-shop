@extends('client.layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@400;600;700;800&family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/category.css') }}">
@section('content')



<body>


<hr>

<div class="catalog">
    <input type="text" placeholder="Я ищу.." class="catalog_input">

    <p class="catalog_text">Каталог товаров</p>

    <div class="select_place">
        <select name="" id="" class="select">
            <option value="0">Сначала дешевые</option>
            <option value="1">Сначала дорогие</option>
            <option value="2">По алфавиту</option>
        </select>
    </div>

</div>

<div class="categories">

    <div class="diveder">

        <div class="price_container">
            <p class="price">Цена</p>
            <p class="rub">P</p>
        </div>

        <div>
            <label for="from" class="labels_price label_from">от</label>
            <label for="to" class="labels_price label_to">до</label>
        </div>

        <input type="number" class="input_numb1 inputs_numbs" value="0" id="from">
        <input type="number" class="input_numb2 inputs_numbs" value="1000000" id="to">

        <p class="checkbox_section">Игры и компьютеры</p>

        <div>
            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="laptops">
                <label for="laptops" class="checkbox_label">Ноутбуки</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="PC">
                <label for="PC" class="checkbox_label">ПК</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="periphery">
                <label for="periphery" class="checkbox_label">Периферия</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="VR">
                <label for="VR" class="checkbox_label">VR</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="game_console">
                <label for="game_console" class="checkbox_label">Игровые консоли</label>
            </div>

        </div>

        <p class="checkbox_section">Для дома</p>

        <div>
            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="vacuum_m">
                <label for="vacuum_m" class="checkbox_label">Пылесосы</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="washing_m">
                <label for="washing_m" class="checkbox_label">Стиральные машины</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="iron">
                <label for="iron" class="checkbox_label">Утюги</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="a/c">
                <label for="a/c" class="checkbox_label">Кондиционеры</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="sewing_m">
                <label for="sewing_m" class="checkbox_label">Швейные машинки</label>
            </div>

        </div>

        <div class="switch_zone">

            <div class="switch_container">
                <label for="discount" class="switch_text">Только скидки</label>
                <label class="switch">
                    <input type="checkbox" class="switch_input" id="discount">
                    <span class="slider round"></span>
                </label>
            </div>

            <div class="switch_container">
                <label for="new" class="switch_text">Новинки</label>
                <label class="switch">
                    <input type="checkbox" class="switch_input" id="new">
                    <span class="slider round"></span>
                </label>
            </div>

            <div class="switch_container">
                <label for="in_fire" class="switch_text">Хит продаж</label>
                <label class="switch">
                    <input type="checkbox" class="switch_input" id="in_fire">
                    <span class="slider round"></span>
                </label>
            </div>

        </div>

        <p class="checkbox_section">Спорт и увлечения</p>

        <div>
            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="tabletennis">
                <label for="tabletennis" class="checkbox_label">Столы для наст. тенниса</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="bikes">
                <label for="bikes" class="checkbox_label">Велосипеды</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="scooters">
                <label for="scooters" class="checkbox_label">Электросамокаты</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="exercise_bikes">
                <label for="exercise_bikes" class="checkbox_label">Велотренажёры</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="strength_training">
                <label for="strength_training" class="checkbox_label">Силовые тренажёры</label>
            </div>

        </div>

        <p class="checkbox_section">Комплектующие для ПК</p>

        <div>
            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="processor">
                <label for="processor" class="checkbox_label">Процессоры</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="video_cards">
                <label for="video_cards" class="checkbox_label">Видеокарты</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="motherboards">
                <label for="motherboards" class="checkbox_label">Материнские платы</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="drives">
                <label for="drives" class="checkbox_label">Накопители</label> <br>
            </div>

            <div class="checkbox_container">
                <input type="checkbox" class="checkbox" id="power_supplies">
                <label for="power_supplies" class="checkbox_label">Блоки питания</label>
            </div>

        </div>

        <button class="remove_categories">Сбросить фильтры</button>

    </div>


    <div class="wrapper">
       @foreach($products as $product)
            <div class="cards">
                <div class="image_zone">
                    <img src="{{ asset('storage/files/'.$product->photo) }}" alt="" class="product1 img-fluid">
                </div>

                <div class="descr_zone">
                    <p class="description">{{$product->description}}</p>
                </div>

                <div class="price_zone">
                    <p class="first_price">{{$product->price * (75/100)}}</p>
                    <p class="discount">-15%</p>
                    <p class="second_price">{{$product->price}}
                </div>


                <div class="button-buy-div">
                    <a href="{{ route('products.add-to-cart',['id' => $id]) }}">
                        <button class="buy-button">
                            <span class="button-text">buy</span>
                        </button>
                    </a>
                </div>
        </div>
       @endforeach
    </div>

    </div>

</body>


@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/category.css') }}">
@endpush

@push('js')
    <scripts></scripts>
@endpush
