@extends('client.layouts.app')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter&family=Manrope:wght@400;600;700;800&family=Montserrat:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/cart.css') }}">
{{--@section('title', 'Cart')--}}
@section('content')

    <div class="div-main-text">
        <span class="main-text">Корзина</span>
    </div>
    <table id="cart"  style="margin-top: 100px" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%; font-family: 'Manrope'; font-style: normal; font-weight: 700; font-size: 36px; line-height: 130%; text-align: center; color: #FFFFFF;">Товар</th>
            <th style="width:10%; font-family: 'Manrope'; font-style: normal; font-weight: 700; font-size: 36px; line-height: 130%; text-align: center; color: #FFFFFF;">Цена</th>
            <th style="width:8%; font-family: 'Manrope'; font-style: normal; font-weight: 700; font-size: 36px; line-height: 130%; text-align: center; color: #FFFFFF;">Колличество</th>
            <th style="width:22%; font-family: 'Manrope'; font-style: normal; font-weight: 700; font-size: 33px; line-height: 130%; text-align: center; color: #FFFFFF;" class="text-center">Итоговая сумма</th>
            <th style="width:10%; font-family: 'Manrope'; font-style: normal; font-weight: 700; font-size: 36px; line-height: 130%; text-align: center; color: #FFFFFF; "></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                    <?php $total += $details['price'] * $details['quantity'] ?>

                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{ $details['photo'] }}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td class="color-price" data-th="Price">{{ $details['price'] }} сом</td>
                    <td data-th="Quantity">
                        <input type="number" readonly  min="0" value="{{ $details['quantity'] }}" class="form-control quantity-{{$id}}" />
                    </td>
                    <td data-th="Subtotal" class="text-center">{{ $details['price'] * $details['quantity'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}">+</button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}">-</button>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>
        <tr>
            <td><a href="{{ url('/') }}" class="btn btn-warning custom-color"><i class="fa fa-angle-left"></i> Продолжить покупки</a></td>
            <td colspan="2" class="hidden-xs"></td>
            <td class="hidden-xs text-center"><strong class="itog">Итог: {{ $total }} сом</strong></td>
        </tr>
        </tfoot>
    </table>
    <div class="table1">
        <div class="table-cell1">
            <div class="header1">5 товаров</div>
            <div class="price1"><strong class="price1">{{ $total }} сом</strong></div>
            <button class="order-button1" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <span class="button-text1">
                    Оформить заказ
                </span>
            </button>
            <div class="disclaimer1">
                Покупая данный товар, я подтверждаю, что ознакомился и согласен с <a href="/shop-conditions">условиями и условиями магазина</a>.
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @include('client.cart-orders.cart-create')
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
</div>
{{--    <div class="modal fade" id="order-modal" tabindex="-1" role="dialog" aria-labelledby="order-modal-label" aria-hidden="true">--}}
{{--        <div class="modal-dialog" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="order-modal-label">Оформление заказа</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                    @include('client.cart-orders.cart-create')--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    @endsection

{{--@endsection--}}
@push('css')
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">
@endpush

@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(".update-cart").click(function (e) {
            // e.preventDefault();
            let id = $(this).data('id');

            $.ajax({
                url: '{{ route('products.update-cart') }}',
                type: "POST",
                data: {_token: '{{ csrf_token() }}', id:id},
                success: function (response) {
                    $('.quantity-'+id).val(response.quantity);

                }
            });
        });
        $(".remove-from-cart").click(function (e) {
            e.preventDefault();
            let id = $(this).data('id');
                $.ajax({
                    url: '{{ route('products.remove-product') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id:id},
                    success: function (response) {
                      window.location.reload();

                    }
                });
        });
    </script>

    <script>
        $(document).ready(function() {
            // $('.order-button1').click(function() {
            //     $('#order-modal').modal('show');
            // });

            $('#order-form').submit(function(event) {
                event.preventDefault();

                var url = $(this).attr('action');
                var formData = $(this).serialize();

                $.ajax({
                    type: 'POST',
                    url: url,
                    data: formData,
                    dataType: 'json',
                    success: function(response) {


                        console.log('Заказ успешно оформлен:', response);


                        $('#order-modal').modal('hide');
                    },
                    error: function(xhr, status, error) {


                        console.log('Произошла ошибка при оформлении заказа:', error);
                    }
                });
            });
        });
    </script>
@endpush
