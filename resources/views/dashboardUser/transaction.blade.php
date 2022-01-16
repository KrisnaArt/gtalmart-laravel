@extends('dashboardUser.layout.main')

@section('container')
    <div class="card">
        <div class="card-header pr-5">
            Transaksi
        </div>
        <div class="card-body pr-4">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>No Invoice</th>
                        <th>Produk</th>
                        <th>Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $transaction->no_invoice }}</td>
                        <td>{{ $transaction->product->name }}</td>
                        <td>@currency( $transaction->product->price )</td>
                        <td>{{ $transaction->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection