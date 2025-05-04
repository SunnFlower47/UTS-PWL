@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Detail Jadwal</h3>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered">
                <tr>
                    <th>Kode MK</th>
                    <td>{{ $jadwal->kode_mk }}</td>
                </tr>
                <tr>
                    <th>Nama MK</th>
                    <td>{{ $jadwal->nama_mk }}</td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>{{ $jadwal->jurusan }}</td>
                </tr>
                <tr>
                    <th>Tahun Akademik</th>
                    <td>{{ $jadwal->tahun_akademik }}</td>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td>{{ ucfirst($jadwal->semester) }}</td>
                </tr>
                <tr>
                    <th>Dosen</th>
                    <td>{{ $jadwal->nama_dosen }}</td>
                </tr>
                <tr>
                    <th>Ruang</th>
                    <td>{{ $jadwal->ruang }}</td>
                </tr>
                <tr>
                    <th>Hari</th>
                    <td>{{ $jadwal->hari }}</td>
                </tr>
                <tr>
                    <th>Jam</th>
                    <td>
                        {{ \Carbon\Carbon::parse($jadwal->jam_mulai)->format('H:i') }} -
                        {{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') }}
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <a href="{{ route('jadwal_kuliah.index') }}" class="btn btn-secondary mt-3">Back</a>
</div>
@endsection
