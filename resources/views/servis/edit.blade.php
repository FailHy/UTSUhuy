@extends('layouts.template')

@section('content')
<div class="container">
    <h1>Edit Data Servis</h1>

    <form action="{{ route('servis.update', $servis->id) }}" method="POST">
        @csrf
        @method('PUT')

        @include('servis.form')

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('servis.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
