@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Jadwal Kuliah</h2>
    <form action="{{ route('jadwal_kuliah.update', $jadwal->id) }}" method="POST">
        @csrf
        @method('PUT')
        @include('jadwal_kuliah._form', ['jadwal' => $jadwal])
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('jadwal_kuliah.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
