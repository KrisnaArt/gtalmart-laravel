@extends('dashboardAdmin.layout.main')

@section('container')
    <div class="container-fluid">
        <form method="post" action="/dashboardAdmin/products/{{ $product->slug }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Update Product</h6>
                </div>
                <div class="card-body">
                    <h6>Nama Product</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name" aria-label="name" id="name" name="name" required autofocus value="{{ old('name', $product->name) }}">
                        @error('name')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <h6>Kategori Product</h6>
                    <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04" name="category_id">
                            <option selected>Choose...</option>
                            @foreach ($categories as $category)
                                @if(old('category_id',$product->category_id) == $category->id)
                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>  
                                @else
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>  
                                @endif
                            @endforeach
                        </select>
                    </div><br>
                    <h6>Slug</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        </div>
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" placeholder="slug" aria-label="slug" id="slug" name="slug" required value="{{ old('slug',$product->slug) }}" readonly>
                        @error('slug')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <h6>Link Product</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" id="basic-url" aria-describedby="basic-addon3" name="link" id="link" required value="{{ old('link',$product->link) }}">
                        @error('link')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <h6>Foto Product</h6>
                    <div class="input-group mb-3">
                        <div class="custom-file">
                            <label for="image" class="custom-file-label">Choose file</label>
                            <input type="file" class="custom-file-input  @error('image') is-invalid @enderror" id="image" name="image">
                            @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <h6>Deskripsi Product</h6>
                    <div class="form-group">
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description',$product->description) }}</textarea>
                    </div>
                    <h6>Harga Product</h6>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Rp</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price" id="price" value="{{ old('price',$product->price) }}">
                    </div>
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </div>
        </form>
    </div>
    <script>
        const name = document.querySelector('#name');
        const slug = document.querySelector('#slug');
  
        name.addEventListener('change', function(){
          fetch('/dashboardAdmin/products/checkSlug?name='+name.value)
          .then(response => response.json())
          .then(data=>slug.value = data.slug)
        });
    </script>
@endsection