<!-- Modal Tambah -->
<div class="modal fade" id="tambahModalMahasiswa" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form tambah data -->
            <form method="post" action="{{ url('data-mahasiswa') }}">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="tempat lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" id="tempat lahir" name="tempat lahir">
                    </div>
                    <div class="mb-3">
                        <label for="tanggal lahir" class="form-label">Tanggal Lahir</label>
                        <input type="number" class="form-control" id="tanggal lahir" name="tanggal lahir">
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Kelamin</label>
                        <input type="text" class="form-control" id="jenis" name="jenis">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <div class="mb-3">
                        <label for="rt rw" class="form-label">Rt Rw</label>
                        <input type="number" class="form-control" id="rtrw" name=" rt rw">
                    </div>
                    <div class="mb-3">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan">
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label">Kecamatan</label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan">
                    </div>
                    <div class="mb-3">
                        <label for="kabupaten kota" class="form-label">Kabupaten Kota</label>
                        <input type="text" class="form-control" id="kabupaten kota" name="kabupaten kota">
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label">Provinsi</label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi">
                    </div>
                    <div class="mb-3">
                        <label for="no hp" class="form-label">No Hp</label>
                        <input type="number" class="form-control" id="no hp" name="no hp">
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
