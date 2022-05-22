@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title">Tambah Obat</p>
                        <a class="btn btn-danger float-right" href="/obat">Kembali</a>
                    </div>
                    <div class="card-body">
                         @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/obat" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" placeholder="ex: Sate" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Ketersediaan</label>
                                <select name="status" class="form-control" required>
                                    <option value="0">Tidak tersedia</option>
                                    <option value="1">Tersedia</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Harga</label>
                                <input type="number" name="harga" class="form-control" placeholder="ex: 1000" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label>Kategori</label>
                                <select name="kategori" class="form-control" required>
                                    <option value="Makanan">Makanan</option>
                                    <option value="Minuman">Minuman</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->


@endsection

@section('script')

@endsection

