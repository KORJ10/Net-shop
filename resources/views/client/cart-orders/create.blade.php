@section('content')
    <form id="order-form" action="{{ route('cart-orders.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="card_number">Номер карты:</label>
            <input type="text" class="form-control" id="card_number" name="card_number" required>
        </div>
        <div class="form-group">
            <label for="delivery_address">Адрес доставки:</label>
            <input type="text" class="form-control" id="delivery_address" name="delivery_address" required>
        </div>
        <button type="submit" class="btn btn-primary">Оформить заказ</button>
    </form>
@endsection
