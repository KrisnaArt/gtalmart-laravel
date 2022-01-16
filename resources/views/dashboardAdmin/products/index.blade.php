@extends('dashboardAdmin.layout.main')

@section('container')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Product</h6>
            </div>
            <div class="card-body">
                <a href="/dashboardAdmin/products/create" class="btn btn-primary mb-3">Create new Product</a>
                @if(session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="text-center">#</th>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Link</th>
                                <th>Deskripsi</th>
                                <th>Harga</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->link }}</td>
                                <td>{{ $product->excerpt }}</td>
                                <td>@currency($product->price)</td>
                                <td>
                                    <div class="row">
                                        <a href="/dashboardAdmin/products/{{ $product->slug }}/edit" class="btn btn-icon btn-primary" role="button" aria-pressed="true">
                                            <span class="btn-inner--icon"><i class="fas fa-edit"></i></span>
                                        </a>
                                        <form action="/dashboardAdmin/products/{{ $product->slug }}" method="post" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-icon btn-primary" type="submit">
                                                <span class="btn-inner--icon"><i class="far fa-trash-alt"></i></span>
                                            </button>                                        
                                        </form>
                                    </div>
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