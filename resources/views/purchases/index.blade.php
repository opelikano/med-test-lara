@extends('layout')

@section('title', 'Список закупок')

@section('content')
<div class="container mt-4">
    <h1>Список закупок</h1>
    <a href="{{ route('purchases.create') }}" class="btn btn-primary mb-3">Додати закупку</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Назва продукту</th>
            <th>Кількість</th>
            <th>Одиниці виміру</th>
            <th>Ціна</th>
            <th>Дата закупівлі</th>
            <td></td>
        </tr>
        </thead>
        <tbody>
        @foreach ($purchases as $purchase)
            <tr>
                <td>{{ $purchase->id }}</td>
                <td>{{ $purchase->product_name }}</td>
                <td>{{ $purchase->quantity }}</td>
                <td>{{ $purchase->unit }}</td>
                <td>{{ $purchase->price }}</td>
                <td>{{ $purchase->purchase_date }}</td>
                <td>
                    <a href = "{{ route('purchases.edit', $purchase->id) }}" class="btn btn-sm btn-info">Редагувати</a>
                    <form action = "{{ route('purchases.destroy', $purchase->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Ви впевнені?')">Видалити</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="pagination d-flex justify-content-center">
        {{ $purchases->links('pagination.custom') }}
    </div>
</div>

@endsection
