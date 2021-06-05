@extends("layout.app")
@section('judul', 'TheMilk | Add Product Menu')
@section("content")
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="/store-product" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        Tambah Produk
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="image">Product Image</label><br>
                            <input type="file" name="image" id="image">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection