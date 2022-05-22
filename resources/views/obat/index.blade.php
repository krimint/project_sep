@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title">Obat</p>
                        <a class="btn btn-success float-right" href="/obat/create">Add</a>
                    </div>
                    <div class="card-body">
                        @if(session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <table class="table table-bordered" id="menu-table">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($obats as $value)
                                <tr>
                                    <td>{{  $value->id }}</td>
                                    <td>{{  $value->nama }}</td>
                                    <td>{{  $value->harga }}</td>
                                    <td>{{  $value->kategori }}</td>
                                    <td>
                                        @if($value->status == 0)
                                            <p>Tidak tersedia</p>
                                            @else
                                            <p>Tersedia</p>
                                        @endif
                                    </td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('menu.destroy', $value->id) }}" method="POST">
                                            <a href="{{ route('menu.edit', $value->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#menu-table').DataTable({
                processing:true
            });
        });
    </script>
@endsection
