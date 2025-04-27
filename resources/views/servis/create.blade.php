@extends('layouts.template')

@section('content')
<div class="container">
    <h1>Tambah Data Servis</h1>

    <form action="{{ route('servis.store') }}" method="POST">
        @csrf

        @include('servis.form')

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('servis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
