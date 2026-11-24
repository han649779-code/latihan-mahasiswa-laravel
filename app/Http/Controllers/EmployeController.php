<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // Tampil data
    public function index()
    {
        $data['judul'] = 'CRUD data Pegawai';
        $data['employes'] = Employe::all();
        return view('tampil_data', $data);
    }

    // Form tambah data
    public function create()
    {
        $data['judul'] = 'Tambah data Pegawai';
        return view('tambah_data', $data);
    }

    // Simpan data
    public function store(Request $request)
    {
        $employe = new Employe;
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();

        return redirect('/employe');
    }

    // Form edit data
    public function show(Employe $employe)
    {
        $data['judul'] = 'Edit data Pegawai';
        $data['employe'] = $employe;
        return view('edit_data', $data);
    }

    // Ubah data
    public function update(Request $request, Employe $employe)
    {
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();

        return redirect('/employe');
    }

    // Hapus data
    public function destroy(Employe $employe)
    {
        $employe->delete();

        return redirect('/employe');
    }
}