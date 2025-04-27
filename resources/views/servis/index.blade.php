@extends('layouts.template')

@section('title', 'Data Servis Kendaraan')

@section('content')
<div class="container my-4">

    <h1 class="mb-4" style="font-size: 32px; font-weight: bold;">Data Servis Kendaraan</h1>

    <div class="mb-3 d-flex gap-2">
        <a href="{{ route('servis.create') }}" class="btn btn-primary" style="padding: 12px 20px;">Tambah Servis</a>
        <a href="{{ route('servis.deleted') }}" class="btn btn-secondary" style="padding: 12px 20px;">Riwayat Servis Dihapus</a>
    </div>

    <table class="table table-bordered table-striped" style="border: 3px solid black;">
        <thead style="background-color: #000; color: #000000;">
            <tr style="border: 2px solid black;">
                <th>No</th>
                <th>Nama Pemilik</th>
                <th>No Polisi</th>
                <th>Jenis Kendaraan</th>
                <th>Keluhan</th>
                <th>Jenis Servis</th>
                <th>Tanggal Servis</th>
                <th>Biaya</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servis as $s)
            <tr style="border: 2px solid black;">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->nama_pemilik }}</td>
                <td>{{ $s->nomor_polisi }}</td>
                <td>{{ $s->jenis_kendaraan }}</td>
                <td>{{ $s->keluhan }}</td>
                <td>{{ $s->jenis_servis }}</td>
                <td>{{ $s->tanggal_servis }}</td>
                <td>Rp{{ number_format($s->biaya, 0, ',', '.') }}</td>
                <td>{{ ucfirst($s->status) }}</td>
                <td class="d-flex gap-1">
                    <a href="{{ route('servis.edit', $s->id) }}" class="btn btn-warning btn-sm" style="border: 2px solid black; font-weight: bold;">Edit</a>
                    <form action="{{ route('servis.destroy', $s->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm" style="border: 2px solid black; font-weight: bold;">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end mt-3">
        <div class="pagination" style="border: 2px solid black; padding: 5px;">
            {{ $servis->links() }}
        </div>
    </div>

</div>
@endsection
