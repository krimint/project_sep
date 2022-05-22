@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title">Supplier</p>
                        <a class="btn btn-success float-right" href="supplier/create">Add</a>
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
                        <div class="table-responsive">
                            <table class="table table-sm table-bordered" id="paket-table">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Supplier</th>
                                    <th>Alamat Supplier</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                @foreach ($suppliers as $supplier)
                                    <tr>
                                        <td class="text-center">{{ ++$i }}</td>
                                        {{-- <td><img src="/image/{{ $user->image }}" width="50px" height="50px"></td> --}}
                                        {{-- <td><img src="{{ asset("storage/image/pengguna/$user->email") }}.jpg" style="width: 50px;height: 50px;" alt="Tidak ada foto"></td> --}}
                                        <td>{{ $supplier->nama_supplier }}</td>
                                        <td>{{ $supplier->tempat_supplier }}</td>
                                        <td>{{ $supplier->status }}</td>
                                        <td class="text-center">
                                            <form action="{{ route('supplier.destroy',$supplier->id) }}" method="POST" class="form-inline">
                                                <a class="btn btn-primary btn-sm" href="{{ route('supplier.edit',$supplier->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
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
        </div>
    </section>
    <!-- /.content -->

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#paket-table').DataTable({
                processing:true
            });
        });
    </script>
@endsection
