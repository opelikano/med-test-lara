@extends('layout')

@section('title', 'Створити закупку')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Створення нової закупки</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('purchases.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="product_name">Назва продукту:</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" required>
                            </div>

                            <div class="form-group">
                                <label for="quantity">Кількість:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" required>
                            </div>

                            <div class="form-group">
                                <label for="unit">Одиниці виміру:</label>
                                <input type="text" class="form-control" id="unit" name="unit" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Ціна:</label>
                                <input type="number" class="form-control" id="price" name="price" required>
                            </div>

                            <div class="form-group">
                                <label for="purchase_date">Дата закупівлі:</label>
                                <input type="date" class="form-control" id="purchase_date" name="purchase_date" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Додати закупку</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
