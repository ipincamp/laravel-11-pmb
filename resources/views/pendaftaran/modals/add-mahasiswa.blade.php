<!-- Modal Tambah -->
<div class="modal fade" id="modalTambahMahasiswa" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Data Calon Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form tambah data -->
            <form method="post" action="{{ url('formulir/mahasiswa') }}">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Tempat Lahir<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Tanggal Lahir<span class="text-danger">*</span>
                        </label>
                        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Jenis Kelamin<span class="text-danger">*</span>
                        </label>
                        <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Alamat<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="agama" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Agama<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="agama" name="agama" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="number" class="form-control" placeholder="RT" aria-label="RT" name="rt" required>
                        <span class="input-group-text">/</span>
                        <input type="number" class="form-control" placeholder="RW" aria-label="RW" name="rw" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelurahan" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Kelurahan<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="kelurahan" name="kelurahan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kecamatan" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Kecamatan<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="kecamatan" name="kecamatan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kabupaten_kota" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Kabupaten / Kota<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="kabupaten_kota" name="kabupaten" required>
                    </div>
                    <div class="mb-3">
                        <label for="provinsi" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Provinsi<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="provinsi" name="provinsi" required>
                    </div>
                    <div class="mb-3">
                        <label for="no_hp" class="form-label tooltip-text" data-bs-toggle="tooltip" data-bs-placement="top" title="This field is required">
                            Nomor HP / WA<span class="text-danger">*</span>
                        </label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
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
