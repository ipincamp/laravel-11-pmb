<!-- Modal Tambah -->
<div class="modal fade" id="modalUploadBukti" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Pilih Program Studi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form tambah data -->
            <form method="post" action="{{ url('formulir/prodi') }}">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="pilihan1" class="form-label">
                            Pilihan 1 <span class="text-danger">*</span>
                        </label>
                        <select class="form-select" id="pilihan1" name="pilihan1">
                            <option selected>Pilih...</option>
                            <option value="informatika">Informatika</option>
                            <option value="sistem_informasi">Sistem Informasi</option>
                            <option value="teknologi_informasi">Teknologi Informasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pilihan2" class="form-label">
                            Pilihan 2 <span class="text-danger">*</span>
                        </label>
                        <select class="form-select" id="pilihan2" name="pilihan2">
                            <option selected>Pilih...</option>
                            <option value="informatika">Informatika</option>
                            <option value="sistem_informasi">Sistem Informasi</option>
                            <option value="teknologi_informasi">Teknologi Informasi</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="pilihan3" class="form-label">
                            Pilihan 3 <span class="text-danger">*</span>
                        </label>
                        <select class="form-select" id="pilihan3" name="pilihan3">
                            <option selected>Pilih...</option>
                            <option value="informatika">Informatika</option>
                            <option value="sistem_informasi">Sistem Informasi</option>
                            <option value="teknologi_informasi">Teknologi Informasi</option>
                        </select>
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
