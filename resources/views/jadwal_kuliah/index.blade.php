@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Daftar Jadwal Kuliah Ridwan Andrian</h2>
    <a href="{{ route('jadwal_kuliah.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

        <table class="table table-bordered jadwal-table">
        <thead>
            <tr>
                <th>Kode MK</th>
                <th>Nama MK</th>
                <th>Jurusan</th>
                <th>Tahun Akademik</th>
                <th>Semester</th>
                <th>Dosen</th>
                <th>Ruang</th>
                <th>Hari</th>
                <th>Jam</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
    @foreach($jadwals as $jadwal)
    <tr>
        <td>{{ $jadwal->kode_mk }}</td>
        <td>{{ $jadwal->nama_mk }}</td>
        <td>{{ $jadwal->jurusan }}</td>
        <td>{{ $jadwal->tahun_akademik }}</td>
        <td>{{ $jadwal->semester }}</td>
        <td>{{ $jadwal->nama_dosen }}</td>
        <td>{{ $jadwal->ruang }}</td>
        <td>{{ $jadwal->hari }}</td>
        <td>{{ \Carbon\Carbon::parse($jadwal->jam_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($jadwal->jam_selesai)->format('H:i') }}</td>
        <td>
            <a href="{{ route('jadwal_kuliah.show', $jadwal->id) }}" class="btn btn-sm btn-info">Show</a>
            <a href="{{ route('jadwal_kuliah.edit', $jadwal->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('jadwal_kuliah.destroy', $jadwal->id) }}" method="POST" style="display:inline;">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger">Hapus</button>
            </form>
        </td>
    </tr>
    @endforeach
</tbody>

    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    // Message with SweetAlert2
    @if(session('success'))
    Swal.fire({
        icon: 'success',
        title: 'BERHASIL',
        text: '{{ session('success') }}',
        showConfirmButton: false,
        timer: 2000
    });
    @elseif(session('error'))
    Swal.fire({
        icon: 'error',
        title: 'GAGAL!',
        text: '{{ session('error') }}',
        showConfirmButton: false,
        timer: 2000
    });
    @endif
    document.querySelectorAll('.btn-danger').forEach(button => {
    button.addEventListener('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Yakin ingin menghapus?',
            text: "data yang terkait akan dihapus!, Dan tidak dapat dikembalikan!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Hapus',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                this.closest('form').submit();
            }
        });
    });
});

</script>

@endsection
