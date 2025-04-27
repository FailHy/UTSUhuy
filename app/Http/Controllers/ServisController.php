<?php

namespace App\Http\Controllers;

use App\Models\Servis;
use App\Http\Requests\ServisRequest;
use Illuminate\Http\Request;

class ServisController extends Controller
{
    // Tampilkan semua data servis
    public function index()
    {
        $servis = Servis::paginate(7);
        // mengambil semua data table servis dan dibagi 7 per laman
        return view('servis.index', compact('servis'));
        // mengirimkan data servis ke view index
    }

    // Tampilkan form tambah servis
    public function create()
    {
        return view('servis.create');
        // menampilkan form tambah servis
    }

    // Simpan data servis baru
    public function store(ServisRequest $request)
    // Validasi dan simpan data servis
        // Validasi data menggunakan ServisRequest
        // Jika validasi berhasil, data akan disimpan ke database
        // Jika validasi gagal, akan mengembalikan ke form dengan pesan error
        // Menggunakan ServisRequest untuk validasi
    {
        Servis::create($request->validated());
        // Menggunakan method create untuk menyimpan data servis 
        // Menggunakan method validated() untuk mendapatkan data yang sudah divalidasi
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil ditambahkan.');
        // Mengalihkan ke halaman index servis dengan pesan sukses
    }

    // Tampilkan form edit servis
    public function edit($id)
    // Menampilkan form edit servis
    {
        $servis = Servis::findOrFail($id);
        // Mengambil data servis berdasarkan id 
        // Jika tidak ditemukan, akan mengembalikan 404
        // Menggunakan method findOrFail untuk mencari data servis berdasarkan id
        return view('servis.edit', compact('servis'));
        // Mengirimkan data servis ke view edit
        // Menggunakan compact untuk mengirimkan data servis ke view edit
    }

    // Update data servis
    public function update(ServisRequest $request, $id)
    // Validasi dan update data servis
        // Validasi data menggunakan ServisRequest
        // Jika validasi berhasil, data akan diperbarui di database
        // Jika validasi gagal, akan mengembalikan ke form dengan pesan error
        // Menggunakan ServisRequest untuk validasi
        // Menggunakan method update untuk memperbarui data servis
    {
        $servis = Servis::findOrFail($id);
        // Mengambil data servis berdasarkan id
        // Jika tidak ditemukan, akan mengembalikan 404
        // Menggunakan method findOrFail untuk mencari data servis berdasarkan id
        $servis->update($request->validated());
        // Menggunakan method update untuk memperbarui data servis
        // Menggunakan method validated() untuk mendapatkan data yang sudah divalidasi
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil diperbarui.');
        // Mengalihkan ke halaman index servis dengan pesan sukses
        // Menggunakan method route untuk mengalihkan ke halaman index servis
        // Menggunakan method with untuk mengirimkan pesan sukses
    }

    // Soft Delete data servis
    public function destroy($id)
    // Menghapus data servis
        // Menggunakan soft delete untuk menghapus data servis
        // Jika data servis tidak ditemukan, akan mengembalikan 404
    {
        $servis = Servis::findOrFail($id);
        // Mengambil data servis berdasarkan id
        // Jika tidak ditemukan, akan mengembalikan 404
        // Menggunakan method findOrFail untuk mencari data servis berdasarkan id   
        $servis->delete();
        // Menggunakan method delete untuk menghapus data servis
        // Menggunakan soft delete untuk menghapus data servis
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil dihapus.');
        // Mengalihkan ke halaman index servis dengan pesan sukses
        // Menggunakan method route untuk mengalihkan ke halaman index servis
        // Menggunakan method with untuk mengirimkan pesan sukses
    }

    // Tampilkan data servis yang sudah dihapus (soft delete)
    public function deletedServis()
    // Menampilkan data servis yang sudah dihapus
        // Menggunakan soft delete untuk menampilkan data servis yang sudah dihapus
    {
        $servis = Servis::onlyTrashed()->paginate(7);
        // Menggunakan method onlyTrashed untuk menampilkan data servis yang sudah dihapus
        // Menggunakan method paginate untuk membagi data servis menjadi 7 per laman
        return view('servis.deleted', compact('servis'));
        // Mengirimkan data servis yang sudah dihapus ke view deleted
        // Menggunakan compact untuk mengirimkan data servis yang sudah dihapus ke view deleted
    }

    // Restore data servis yang dihapus
    public function restore($id)
    // Mengembalikan data servis yang sudah dihapus
        // Menggunakan soft delete untuk mengembalikan data servis yang sudah dihapus
    {
        $servis = Servis::onlyTrashed()->findOrFail($id);
        // Mengambil data servis yang sudah dihapus berdasarkan id
        // Jika tidak ditemukan, akan mengembalikan 404
        // Menggunakan method onlyTrashed untuk menampilkan data servis yang sudah dihapus
        $servis->restore();
        // Menggunakan method restore untuk mengembalikan data servis yang sudah dihapus
        // Menggunakan soft delete untuk mengembalikan data servis yang sudah dihapus
        return redirect()->route('servis.deleted')->with('success', 'Data servis berhasil dikembalikan.');
        // Mengalihkan ke halaman deleted servis dengan pesan sukses
        // Menggunakan method route untuk mengalihkan ke halaman deleted servis
    }
}
