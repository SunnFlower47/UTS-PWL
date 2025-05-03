@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Jadwal Kuliah</h2>
    <form action="{{ route('jadwal_kuliah.store') }}" method="POST">
        @csrf
        @include('jadwal_kuliah._form')
        <button type="submit" class="btn btn-success mt-3">Save</button>
        <button type="reset" class="btn btn-warning mt-3">Reset</button>
        <a href="{{ route('jadwal_kuliah.index') }}" class="btn btn-danger mt-3">Cancel</a>
    </form>
</div>
@endsection
