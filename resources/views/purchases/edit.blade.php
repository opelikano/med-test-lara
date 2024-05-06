@extends('layout')

@section('title', 'Редагувати закупку')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Редагування закупки</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('purchases.update', $purchase->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="product_name">Назва продукту:</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" value="{{ $purchase->product_name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="quantity">Кількість:</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="{{ $purchase->quantity }}" required>
                            </div>

                            <div class="form-group">
                                <label for="unit">Одиниці виміру:</label>
                                <input type="text" class="form-control" id="unit" name="unit" value="{{ $purchase->unit }}" required>
                            </div>

                            <div class="form-group">
                                <label for="price">Ціна:</label>
                                <input type="number" class="form-control" id="price" name="price" value="{{ $purchase->price }}" required>
                            </div>

                            <div class="form-group">
                                <label for="purchase_date">Дата закупівлі:</label>
                                <input type="date" class="form-control" id="purchase_date" name="purchase_date" value="{{ $purchase->purchase_date }}" required>
                            </div>
                            <input type="hidden" value="{{ $refPageNumber }}" name="ref_page_number">
                            <button type="submit" class="btn btn-primary">Зберегти зміни</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
