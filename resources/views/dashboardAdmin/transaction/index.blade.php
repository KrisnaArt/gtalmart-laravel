@extends('dashboardAdmin.layout.main')

@section('container')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No Invoice</th>
                                <th>Nama User</th>
                                <th>Produk</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->no_invoice }}</td>
                                <td>{{ $transaction->user->name }}</td>
                                <td>{{ $transaction->product->name }}</td>
                                <td>@currency($transaction->product->price)</td>
                                <td>{{ $transaction->status }}
                                <td>
                                    <a href="/dashboardAdmin/transactions/{{ $transaction->id }}/edit" class="btn btn-success btn-icon btn-sm ">Update</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection