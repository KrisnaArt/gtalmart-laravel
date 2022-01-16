@extends('dashboardUser.layout.main')

@section('container')
    <div class="card">
        <div class="card-header pr-5">
            Download
        </div>
        <div class="card-body pr-4">
            <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Produk</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction) 
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td>{{ $transaction->product->name }}</td>
                        <td>
                            <a href="{{ $transaction->product->link }}" class="btn btn-success btn-icon btn-sm ">Download</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection