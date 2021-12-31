@extends('dashboard.layout.main')

@section('container')
<!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Detail Update Product</h6>
            </div>
            <div class="card-body">
                <h6>Nama Product</h6>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" >
                </div>
                <h6>Kategori Product</h6>
                <div class="input-group">
                <select class="custom-select" id="inputGroupSelect04">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                </div><br>
                <h6>Link Product</h6>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                </div>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                </div>
                <h6>Foto Product</h6>
                <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile01">
                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                </div>
                </div>
                <h6>Deskripsi Product</h6>
                <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <h6>Harga Product</h6>
                <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Rp</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                </div>
                <button type="button" class="btn btn-warning">Update</button>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
    <!-- End of Main Content -->
@endsection