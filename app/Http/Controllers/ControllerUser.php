<?php

namespace App\Http\Controllers;

use App\User; //memanggil model
use Illuminate\Http\Request;

class ControllerUser extends Controller
{
    public function index()
    {
        $user = User::all();
        return view ('User.viewuser', compact('user'));    
    }

    public function insertuser(Request $request) //menangkap value yang di request
    {
        $messages = [
            'required' => ':attribute wajib diisi', //pemberitahuan kolom harus diisi tidak boleh kosong
            'min' => ':attribute harus diisi minimal :min karakter', //pemberitahuan input harus minimal karakter
            'max' => ':attribute harus diisi maksimal :max karakter', //pemberitahuan input harus maximal karakter
            'unique' => 'Data sudah ada dalam database', //pemberitahuan inputan jika sudah ada yang terdaftar di database
        ];

        $this->validate($request, [ //
            'nik' => 'required|min:16|unique:users', 
            'name' => 'required|min:3',
            'ttl' => 'required',
            'alamat' => 'required',
            'tlp' => 'required|min:12|unique:users',
            'tugas' => 'required',
            'user' => 'required',
            'email' => 'required',
            'status' => 'required',
            'password' => 'required|min:8',
        ], $messages);

        $user = new User;
        $user->nik = request('nik');
        $user->name = request('name');
        $user->ttl = request('ttl');
        $user->alamat = request('alamat');
        $user->tlp = request('tlp');
        $user->tugas = request('tugas');
        $user->user = request('user');
        $user->email = request('email');
        $user->status = request('status');
        $user->password = bcrypt(request('password'));
        $user->save();

        $notification = array( //pesan saat melakukan update terhadap data
            'message' => 'Data Berhasil Ditambahkan.',
            'alert-type' => 'success'
        );

        return redirect ('user')->with($notification);    
    }

    public function edituser($id)
    {
        $user = User::find($id);
        return view ('User.edit_user', compact('user'));    
    }

    public function updateuser($id)
    {
        $user = User::find($id);
        $user->nik = request('nik');
        $user->name = request('name');
        $user->ttl = request('ttl');
        $user->alamat = request('alamat');
        $user->tlp = request('tlp');
        $user->tugas = request('tugas');
        $user->user = request('user');
        $user->email = request('email');
        $user->status = request('status');
        $user->password = bcrypt(request('password'));
        $user->update();

        $notification = array( //pesan saat melakukan update terhadap data
            'message' => 'Data Berhasil Diubah.',
            'alert-type' => 'success'
        );

        return redirect ('user')->with($notification);
    }

    public function hapususer($id)
    {
        $user = User::find($id);
        $user->delete();

        $notification = array( //pesan saat melakukan update terhadap data
            'message' => 'Data Berhasil Dihapus.',
            'alert-type' => 'success'
        );

        return redirect ('user');    
    }
}
