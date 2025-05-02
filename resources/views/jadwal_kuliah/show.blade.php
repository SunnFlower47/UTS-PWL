@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Detail Jadwal</h3>
    <div class="card">
        <div class="card-body">
            <p><strong>Kode MK:</strong> {{ $jadwal->kode_mk }}</p>
            <p><strong>Nama MK:</strong> {{ $jadwal->nama_mk }}</p>
            <p><strong>Jurusan:</strong> {{ $jadwal->jurusan }}</p>
            <p><strong>Tahun Akademik:</strong> {{ $jadwal->tahun_akademik }}</p>
            <p><strong>Semester:</strong> {{ $jadwal->semester }}</p>
            <p><strong>Dosen:</strong> {{ $jadwal->nama_dosen }}</p>
            <p><strong>Ruang:</strong> {{ $jadwal->ruang }}</p>
            <p><strong>Hari:</strong> {{ $jadwal->hari }}</p>
            <p><strong>Jam:</strong> {{ \Carbon\Carbon::parse($jadwal->jam_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') }}</p>
        </div>
    </div>
    <a href="{{ route('jadwal_kuliah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
