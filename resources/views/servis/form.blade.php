<div class="mb-3">
    <label for="nama_pemilik" class="form-label">Nama Pemilik</label>
    <input type="text" name="nama_pemilik" class="form-control" value="{{ old('nama_pemilik', $servis->nama_pemilik ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="nomor_polisi" class="form-label">No Polisi</label>
    <input type="text" name="nomor_polisi" class="form-control" value="{{ old('nomor_polisi', $servis->nomor_polisi ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="jenis_kendaraan" class="form-label">Jenis Kendaraan</label>
    <select name="jenis_kendaraan" class="form-select" required>
        <option value="motor" {{ old('jenis_kendaraan', $servis->jenis_kendaraan ?? '') == 'motor' ? 'selected' : '' }}>Motor</option>
        <option value="mobil" {{ old('jenis_kendaraan', $servis->jenis_kendaraan ?? '') == 'mobil' ? 'selected' : '' }}>Mobil</option>
        <option value="truk" {{ old('jenis_kendaraan', $servis->jenis_kendaraan ?? '') == 'truk' ? 'selected' : '' }}>Truk</option>
    </select>
</div>

<div class="mb-3">
    <label for="keluhan" class="form-label">Keluhan</label>
    <textarea name="keluhan" class="form-control" required>{{ old('keluhan', $servis->keluhan ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="jenis_servis" class="form-label">Jenis Servis</label>
    <input type="text" name="jenis_servis" class="form-control" value="{{ old('jenis_servis', $servis->jenis_servis ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="tanggal_servis" class="form-label">Tanggal Servis</label>
    <input type="date" name="tanggal_servis" class="form-control" value="{{ old('tanggal_servis', $servis->tanggal_servis ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="biaya" class="form-label">Biaya</label>
    <input type="number" name="biaya" class="form-control" value="{{ old('biaya', $servis->biaya ?? '') }}" required>
</div>

<div class="mb-3">
    <label for="status" class="form-label">Status</label>
    <select name="status" class="form-select" required>
        <option value="menunggu" {{ old('status', $servis->status ?? '') == 'menunggu' ? 'selected' : '' }}>Menunggu</option>
        <option value="dikerjakan" {{ old('status', $servis->status ?? '') == 'dikerjakan' ? 'selected' : '' }}>Dikerjakan</option>
        <option value="selesai" {{ old('status', $servis->status ?? '') == 'selesai' ? 'selected' : '' }}>Selesai</option>
    </select>
</div>
