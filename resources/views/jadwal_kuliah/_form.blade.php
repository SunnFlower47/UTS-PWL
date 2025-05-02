@php
    $jadwal = $jadwal ?? null;
@endphp

<div class="mb-3">
    <label>Kode MK</label>
    <input type="text" name="kode_mk" class="form-control" value="{{ old('kode_mk', $jadwal->kode_mk ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Nama MK</label>
    <input type="text" name="nama_mk" class="form-control" value="{{ old('nama_mk', $jadwal->nama_mk ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Jurusan</label>
    <input type="text" name="jurusan" class="form-control" value="{{ old('jurusan', $jadwal->jurusan ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Tahun Akademik</label>
    <input type="text" name="tahun_akademik" class="form-control" value="{{ old('tahun_akademik', $jadwal->tahun_akademik ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Semester</label>
    <input type="text" name="semester" class="form-control" value="{{ old('semester', $jadwal->semester ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Nama Dosen</label>
    <input type="text" name="nama_dosen" class="form-control" value="{{ old('nama_dosen', $jadwal->nama_dosen ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Ruang</label>
    <input type="text" name="ruang" class="form-control" value="{{ old('ruang', $jadwal->ruang ?? '') }}" required>
</div>

<div class="mb-3">
    <label>Hari</label>
    <select name="hari" class="form-control" required>
        <option value="">-- Pilih Hari --</option>
        @foreach(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'] as $hari)
            <option value="{{ $hari }}" {{ old('hari', $jadwal->hari ?? '') == $hari ? 'selected' : '' }}>{{ $hari }}</option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label>Jam Mulai</label>
    <input type="time" name="jam_mulai" class="form-control" value="{{ old('jam_mulai', isset($jadwal) ? date('H:i', strtotime($jadwal->jam_mulai)) : '') }}" required>
</div>

<div class="mb-3">
    <label>Jam Selesai</label>
    <input type="time" name="jam_selesai" class="form-control" value="{{ old('jam_selesai', isset($jadwal) ? date('H:i', strtotime($jadwal->jam_selesai)) : '') }}" required>
</div>

