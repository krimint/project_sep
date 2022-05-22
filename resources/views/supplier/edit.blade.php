@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title">Edit Supplier</p>
                        <a class="btn btn-danger float-right" href="/owner/supplier">Kembali</a>
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
                        <form action="/owner/supplier/{{ $supplier->id }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nama Supplier</label>
                                <input type="text" name="nama_supplier" value="{{ $supplier->nama_supplier  }}" class="form-control" placeholder="Nama Supplier" required>
                            </div>
                             <div class="form-group col-md-4">
                                <label>Alamat Supplier</label>
                                <input type="text" name="tempat_supplier" class="form-control" placeholder="Alamat Supplier">
                            </div>
                            <div class="form-group col-md-3">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <?php $status =  $supplier->status ;?>
                                    <option value="0" <?= ($status == '0') ? 'selected' : ''; ?>>Tidak Aktif</option>
                                    <option value="1" <?= ($status == '1') ? 'selected' : ''; ?>>Aktif</option>
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
