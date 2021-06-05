@extends("layout.app")
@section('judul', 'TheMilk | Edit Product Menu')
@section("content")
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="/produk/{{ $dt->id }}/update" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        Edit Produk
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Produk</label>
                            <input type="text" name="nama" id="nama" class="form-control" value="{{ $dt->product_name }}">
                        </div>
                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ $dt->price }}">
                        </div>
                        <div class="form-group">
                            <label for="image">Product Image</label><br>
                            <img src="{{ asset('product/'.$dt->image ) }}" height="120px" width="120px" alt="{{ $dt->namaFile }}">
                            {{-- <input type="file" name="image" id="image" value="{{ $dt->jenis_sampah }}"> --}}
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" id="image">
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/admin" class="btn btn-success">Kembali</a>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection