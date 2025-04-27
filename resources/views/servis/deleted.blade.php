@extends('layouts.template')

@section('content')
<div class="container">
    <h1>Riwayat Servis Dihapus</h1>
    <a href="{{ route('servis.index') }}" class="btn btn-secondary mb-3">Kembali</a>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Pemilik</th>
                <th>No Polisi</th>
                <th>Jenis Kendaraan</th>
                <th>Tanggal Servis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servis as $s)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $s->nama_pemilik }}</td>
                <td>{{ $s->no_polisi }}</td>
                <td>{{ $s->jenis_kendaraan }}</td>
                <td>{{ $s->tanggal_servis }}</td>
                <td>
                    <form action="{{ route('servis.restore', $s->id) }}" method="POST">
                        @csrf
                        <button class="btn btn-success btn-sm" onclick="return confirm('Kembalikan data ini?')">Restore</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-end">
        {{ $servis->links() }}
    </div>
</div>
@endsection
