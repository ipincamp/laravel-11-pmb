<!-- Modal Tambah -->
<div class="modal fade" id="modalTambahSekolah" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Sekolah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form tambah data -->
            <form method="post" action="{{ url('formulir/sekolah') }}">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nisn" class="form-label">NISN (Nomor Induk Siswa Nasional)</label>
                        <input type="number" class="form-control" id="nisn" name="nisn">
                    </div>
                    <div class="mb-3">
                        <label for="derajat" class="form-label">SMK / SMA / MA</label>
                        <select class="form-select" id="derajat" name="derajat">
                            <option selected>Pilih Jenjang</option>
                            <option value="SMK">SMK</option>
                            <option value="SMA">SMA</option>
                            <option value="MA">MA</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Sekolah</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Sekolah</label>
                        <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
            <!-- Form tambah data -->

        </div>
    </div>
</div>
<!-- Modal Tambah -->
