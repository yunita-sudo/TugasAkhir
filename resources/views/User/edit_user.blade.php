@extends('master')

@section('isicontent')
<div class="row">
    <div class="col-md-4">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Input Data User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/user/update/{{ $user->id }}" method="post">
            {{csrf_field()}}
            <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInpuUsername">NIK</label>
                        <input type="number" class="form-control" value="{{ $user->nik }}" id="exampleInpuUsername" 
                        name="nik" placeholder="Enter Nik">
                    </div>
                    <div class="form-group">
                        <label for="exampleInpuUsername">Nama Lengkap</label>
                        <input type="text" class="form-control" value="{{ $user->name }}" id="exampleInpuUsername" 
                        name="name" placeholder="Enter Nama">
                    </div>
                    <div class="form-group">
                        <label for="exampleInpuUsername">Tempat,Tanggal Lahir</label>
                        <input type="date" class="form-control" value="{{ $user->ttl }}" id="exampleInpuUsername" 
                        name="ttl" placeholder="Kediri, 30 November 2000">
                    </div>
                    <div class="form-group">
                        <label for="exampleInpuUsername">Alamat Lengkap</label>
                        <input type="text" class="form-control" value="{{ $user->alamat }}" id="exampleInpuUsername" 
                        name="alamat" placeholder="Enter Alamat">
                    </div>
                    <div class="form-group">
                        <label for="exampleInpuUsername">No.Telephone</label>
                        <input type="number" class="form-control" value="{{ $user->tlp }}" id="exampleInpuUsername" 
                        name="tlp" placeholder="Enter Telephone">
                    </div>
                    <div class="form-group">
                        <label for="exampleInpuUsername">Daerah Tugas</label>
                        <input type="text" class="form-control" value="{{ $user->tugas }}" id="exampleInpuUsername" 
                        name="tugas" placeholder="Enter Daerah">
                    </div>
                    <div class="form-group">
                        <label for="exampleInpuUsername">Username</label>
                        <input type="text" class="form-control" value="{{ $user->user }}" id="exampleInpuUsername" 
                        name="user" placeholder="Enter Username">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address</label>
                        <input type="email" class="form-control" value="{{ $user->email }}" id="exampleInputEmail1" 
                        name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="level">Level User</label>
                        <div class="form-group">
                        <select name="status" class="form-control show-tick">
                            <option value="">--- Pilih Level ---</option>
                            <option value="Admin" {{ $user->status == 'Admin' ? 'selected' : ''}}>Admin</option>
                            <option value="Kader" {{ $user->status == 'Kader' ? 'selected' : ''}}>Kader</option>
                            <option value="Pegawai" {{ $user->status == 'Pegawai' ? 'selected' : ''}}>Pegawai</option>
                        </select>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="text" class="form-control" value="{{ $user->password }}" id="exampleInputPassword1" 
                        name="password" placeholder="Password">
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
@endsection