<form action="{{ route('cart-orders.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="card_number">Номер карты:</label>
        <input type="text" name="card_number" id="card_number" class="form-control">
    </div>

    <div class="form-group">
        <label for="delivery_address">Адрес доставки:</label>
        <input type="text" name="delivery_address" id="delivery_address" class="form-control">
    </div>

    <!-- Другие поля для ввода информации -->

    <button type="submit" class="btn btn-primary">Оформить заказ</button>
</form>
