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
        return view('servis.index', compact('servis'));
    }

    // Tampilkan form tambah servis
    public function create()
    {
        return view('servis.create');
    }

    // Simpan data servis baru
    public function store(ServisRequest $request)
    {
        Servis::create($request->validated());
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil ditambahkan.');
    }

    // Tampilkan form edit servis
    public function edit($id)
    {
        $servis = Servis::findOrFail($id);
        return view('servis.edit', compact('servis'));
    }

    // Update data servis
    public function update(ServisRequest $request, $id)
    {
        $servis = Servis::findOrFail($id);
        $servis->update($request->validated());
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil diperbarui.');
    }

    // Soft Delete data servis
    public function destroy($id)
    {
        $servis = Servis::findOrFail($id);
        $servis->delete();
        return redirect()->route('servis.index')->with('success', 'Data servis berhasil dihapus.');
    }

    // Tampilkan data servis yang sudah dihapus (soft delete)
    public function deletedServis()
    {
        $servis = Servis::onlyTrashed()->paginate(7);
        return view('servis.deleted', compact('servis'));
    }

    // Restore data servis yang dihapus
    public function restore($id)
    {
        $servis = Servis::onlyTrashed()->findOrFail($id);
        $servis->restore();
        return redirect()->route('servis.deleted')->with('success', 'Data servis berhasil dikembalikan.');
    }
}
