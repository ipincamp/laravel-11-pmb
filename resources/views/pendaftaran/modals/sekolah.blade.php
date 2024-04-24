<!-- Modal Tambah -->
<div class="modal fade" id="modalTambahSekolah" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Sekolah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form tambah data -->
            <form method="post" action="{{ url('data-sekolah') }}">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="nisn" class="form-label">Nisn</label>
                        <input type="number" class="form-control" id="nisn" name="nisn">
                    </div>
                    <div class="mb-3">
                        <label for="jenjang" class="form-label">Jenjang smk/sma/ma</label>
                        <input type="text" class="form-control" id="jenjang" name="jenjang">
                    </div>
                    <div class="mb-3">
                        <label for="sekolah" class="form-label">Nama Sekolah</label>
                        <input type="text" class="form-control" id="sekolah" name="sekolah">
                    </div>
                    <div class="mb-3">
                        <label for="jurusan" class="form-label">Kode Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan">
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
