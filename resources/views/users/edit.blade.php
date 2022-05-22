@extends('layouts.app')

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p class="card-title">Edit Pegawai</p>
                        <a class="btn btn-danger float-right" href="/owner/users">Kembali</a>
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
                        <form action="/owner/users/{{ $user->id }}" method="POST"  enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label>Nama</label>
                                <input type="text" name="name" value="{{ $user->name  }}" class="form-control" placeholder="Nama" required>
                            </div>
                             <div class="form-group col-md-4">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Email</label>
                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" required>
                                    <?php $jk =  $user->jenis_kelamin ;?>
                                    <option value="L" <?= ($jk == 'L') ? 'selected' : ''; ?>>L</option>
                                    <option value="P" <?= ($jk == 'P') ? 'selected' : ''; ?>>P</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tgl_lahir" value="{{ $user->tgl_lahir }}" class="form-control" placeholder="Tanggal Lahir" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Role</label>
                                <select class="form-control" name="role" required>
                                    <?php $role =  $user->role ;?>
                                    <option value="Owner" <?= ($role == 'Owner') ? 'selected' : ''; ?>>Owner</option>
                                    <option value="Admin" <?= ($role == 'Admin') ? 'selected' : ''; ?>>Admin</option>
                                    <option value="User" <?= ($role == 'User') ? 'selected' : ''; ?>>User</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label>Status</label>
                                <select class="form-control" name="status" required>
                                    <?php $status =  $user->status ;?>
                                    <option value="0" <?= ($status == '0') ? 'selected' : ''; ?>>Tidak Aktif</option>
                                    <option value="1" <?= ($status == '1') ? 'selected' : ''; ?>>Aktif</option>
                                </select>
                            </div>
                            {{-- <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Foto</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                            </div> --}}
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
