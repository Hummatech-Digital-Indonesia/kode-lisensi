<div class="modal fade" id="deleteRekeningModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi Penghapusan Rekening</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="deleteRekeningForm" method="POST">
                @csrf
                <div class="modal-body m-3">
                    <p class="mb-0">Data yang dihapus tidak dapat dikembalikan</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Hapus</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
