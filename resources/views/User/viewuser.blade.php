<!-- Untuk menghubungkan dengan file master -->
@extends('master')

<!-- Untuk menghubungkan dengan posisi yang sesuai dengan deklarasi di file master -->
@section('isicontent')

@if(session('sukses'))
<div class="alert alert-success" role="alert">
    <div class="alert-title">Notifikasi!!!</div>
    {{ session('sukses')}}
</div>
@endif
<div class="row">
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Input Data User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('insertuser')}}" method="post">
                {{csrf_field()}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInpuUsername">NIK</label>
                                <input type="number" class="form-control @error('nik') is-invalid @enderror"
                                    id="exampleInpuUsername" name="nik" placeholder="Enter Nik">
                                @if($errors->has('nik'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('nik')}}
                                </div>
                                @endif
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInpuUsername">Nama Lengkap</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    id="exampleInpuUsername" name="name" placeholder="Enter Nama">
                                @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name')}}
                                </div>
                                @endif
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInpuUsername">Tempat, Tanggal Lahir</label>
                                <input type="date" class="form-control @error('ttl') is-invalid @enderror"
                                    id="exampleInpuUsername" name="ttl" placeholder="Kediri, 30 November 2000">
                                @if($errors->has('ttl'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('ttl')}}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInpuUsername">Alamat Lengkap</label>
                                <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                    id="exampleInpuUsername" name="alamat" placeholder="Enter Alamat">
                                @if($errors->has('alamat'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('alamat')}}
                                </div>
                                @endif
                            </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInpuUsername">No.Telephone</label>
                                <input type="number" class="form-control @error('tlp') is-invalid @enderror"
                                    id="exampleInpuUsername" name="tlp" placeholder="Enter Level">
                                @if($errors->has('tlp'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tlp')}}
                                </div>
                                @endif
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInpuUsername">Daerah Tugas</label>
                                <input type="text" class="form-control @error('tugas') is-invalid @enderror"
                                    id="exampleInpuUsername" name="tugas" placeholder="Enter Daerah">
                                @if($errors->has('tugas'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('tugas')}}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInpuUsername">Username</label>
                                <input type="text" class="form-control @error('user') is-invalid @enderror"
                                    id="exampleInpuUsername" name="user" placeholder="Enter Username">
                                @if($errors->has('user'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user')}}
                                </div>
                                @endif
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Address</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="exampleInputEmail1" name="email" placeholder="Enter Email">
                                @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email')}}
                                </div>
                                @endif
                            </div>
                            </div>
                    </div>
                    <div class="row">
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInpuUsername">Level User</label>
                                <select name="status" class="form-control" required>
                                    <option>--- Pilih Level ---</option>
                                    <option>Admin</option>
                                    <option>Kader</option>
                                    <option>Pegawai</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror"
                                    id="exampleInputPassword1" name="password" placeholder="Password">
                                @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password')}}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="row">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tabel Data User</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor HP</th>
                        <th>Daerah Tugas</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $d)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $d->nik }}</td>
                        <td>{{ substr(strip_tags($d->name), 0, 10) }}..</td>
                        <td>{{ substr(strip_tags($d->alamat), 0, 10) }}..</td>
                        <td>{{ $d->tlp }}</td>
                        <td>{{ $d->tugas }}</td>
                        <td>{{ $d->user }}</td>
                        <td>{{ $d->status }}</td>
                        <td>
                            <a type="button" href="/user/edit/{{ $d->id }}" class="btn btn-success">Edit</a>
                            <a type="button" href="/user/hapus/{{ $d->id }}"
                                onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data ini?')"
                                class="btn btn-danger">Hapus</a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>No.</th>
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Nomor HP</th>
                        <th>Daerah Tugas</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@endsection