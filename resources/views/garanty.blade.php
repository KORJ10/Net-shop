@extends('client.layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@400;600;700;800&family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/garantii.css') }}">
@section('content')
    <img src="images/garantii.jpg" alt="Описание картинки" style="width: 90%">
   <div class="garantii">
       <div class="big-text">Уважаемые покупатели</div>
       <div class="small-text">На все сотовые телефоны, приобретенные в торговой сети "TechBazzar", предоставляется гарантийное обслуживание сроком на 1 год.</div>

       <div class="big-text">Условия гарантийного обслуживания</div>
       <div class="list">
           <div class="list-item">Гарантия на проданные товары подразумевает под собой бесплатный ремонт в течение гарантийного срока, либо их замену на аналогичные в случае невозможности ремонта.</div>
           <div class="list-item">Ответственность за качество товара несет фирма-производитель.</div>
           <div class="list-item">На все товары предоставляется гарантия в полном соответствии с Законом "О защите прав потребителей".</div>
           <div class="list-item">Гарантия подтверждает право покупателя на выполнение бесплатного ремонта изделия в авторизованном сервисном центре фирмы-производителя. Срок гарантии устанавливается производителем и указан в фирменном гарантийном талоне изделия.</div>
           <div class="list-item">В случае обнаружения в изделии дефекта в течение гарантийного срока, ремонт или замена изделия или его частей производится в авторизованном сервисном центре фирмы-производителя, согласно условиям гарантийного обслуживания, указанным в гарантийном талоне.</div>
           <div class="list-item">Правила и сроки нахождения изделия в сервисном центре устанавливаются сервисным центром.</div>
       </div>

       <div class="big-text">Обмен, возврат товара.</div>
       <div class="small-text">Все условия по обмену/возврату товара применимы только к товарам, купленным в розничной сети "TechBazzar".</div>

       <div class="final-text">
           <div class="small-text-1">
               К возврату/обмену принимается:
           </div>

           <div class="list-item">Неисправный товар, с которым покупатель предоставляет Справку или Акт из Авторизированного Сервисного Центра о неремонтопригодности товара или отсутствии запчастей.</div>
           <div class="list-item">Справка/Акт может быть представлена без товара, если товар остался на ответственном хранении в АСЦ.</div>
       </div>
   </div>



@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('css/garantii.css') }}">
@endpush

@push('js')
    <scripts></scripts>
@endpush
