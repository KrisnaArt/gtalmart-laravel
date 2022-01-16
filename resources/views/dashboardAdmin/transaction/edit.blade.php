@extends('dashboardAdmin.layout.main')

@section('container')
    <div class="container-fluid">
        <form method="post" action="/dashboardAdmin/transactions/{{ $transaction->id }}">
            @method('put')
            @csrf
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Transaksi</h6>
                </div>
                <div class="card-body">
                    <h6>No Invoice</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control @error('noinvoice') is-invalid @enderror"
                            placeholder="no invoice" aria-label="name" id="no_invoice" name="no_invoice" required readonly
                            value="{{ old('noinvoice', $transaction->no_invoice) }}">
                        @error('noinvoice')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <h6>Status</h6>
                    <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04" name="status">
                            @foreach ($categories as $category)
                                @if (old('id', $category['id']) == $category['id'])
                                    <option value="{{ $category['value'] }}" selected>{{ $category['name'] }}</option>
                                @else
                                    <option value="{{ $category['value'] }}">{{ $category['name'] }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div><br>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
