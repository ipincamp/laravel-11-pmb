<!-- Modal Tambah -->
<div class="modal fade" id="modalUploadBukti" tabindex="-1" aria-labelledby="tambahModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahModalLabel">Pilih Program Studi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <!-- Form tambah data -->
            <form method="POST" action="{{ route('bukti-pembayaran.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="modal-body">
                    <div class="mb-3">
                        <label for="metode" class="form-label">Metode Pembayaran</label>
                        <select class="form-select" id="metode" name="metode" required>
                            <option value="">Pilih Metode Pembayaran</option>
                            <option value="transfer">Transfer</option>
                            <option value="cash">Tunai</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="tujuan" class="form-label">Tujuan Pembayaran</label>
                        <input type="text" class="form-control" id="tujuan" name="tujuan" required>
                    </div>

                    <div class="mb-3">
                        <label for="jumlah" class="form-label">Jumlah Pembayaran</label>
                        <input type="number" class="form-control" id="jumlah" name="jumlah" required>
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_bayar" class="form-label">Tanggal Bayar</label>
                        <input type="date" class="form-control" id="tanggal_bayar" name="tanggal_bayar" required>
                    </div>

                    <div class="mb-3">
                        <label for="bukti" class="form-label">Bukti Pembayaran</label>
                        <input type="file" class="form-control" id="bukti" name="file" required>
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
