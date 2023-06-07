@extends('client.layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@400;600;700;800&family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/o_nas.css') }}">
@section('content')
    <img src="images/about_company.png" alt="Описание картинки" style="width: 100%">
    <div class="garantii">
        <div class="big-text">Добро пожаловать в TechBazzar!</div>
        <div class="small-text">Мы являемся одним из ведущих онлайн-магазинов электроники, где вы можете найти самые инновационные и качественные товары в мире технологий. </div>
        <div class="small-text">Наша цель - предоставить вам непревзойденное электронное путешествие, позволяющее воплотить в жизнь все ваши цифровые мечты.</div>


        <div class="list">
            <div class="list-item">В TechBazzar мы понимаем, что технологии меняют мир, и мы хотим быть вашим надежным партнером в этом удивительном путешествии. </div>
            <div class="list-item">Мы стремимся предложить широкий ассортимент продукции от ведущих мировых брендов, включая ноутбуки, смартфоны, планшеты, телевизоры, камеры, игровые консоли и многое другое.</div>
        </div>


        <div class="small-text">Мы также стремимся предоставить нашим клиентам превосходное обслуживание, чтобы каждая покупка в TechBazzar была простой, приятной и безопасной.</div>
        <div class="small-text">Мы гарантируем конфиденциальность предоставленных вами данных. Ваши личные данные будут использованы только для обработки заказа и обеспечения качественного обслуживания.</div>


        <div class="small-text">В TechBazzar мы ценим инновации и стремимся быть впереди технологических тенденций.</div>
        <div class="small-text">Мы постоянно обновляем наш ассортимент, чтобы предложить вам самые последние модели и новинки, которые помогут вам оставаться на передовой цифрового мира.</div>


        <div class="small-text">Благодарим вас за то, что выбрали TechBazzar в качестве своего магазина электроники. </div>
        <div class="small-text">Мы гордимся тем, что можем быть частью вашего технологического пути, и обещаем продолжать предоставлять вам самые передовые продукты и превосходное обслуживание.</div>

        <div class="big-text">С уважением, Команда TechBazzar</div>
    </div>



@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/o_nas.css') }}">
@endpush

@push('js')
    <scripts></scripts>
@endpush
