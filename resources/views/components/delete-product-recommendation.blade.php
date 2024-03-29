<div class="modal fade" id="deleteProductRecommendationModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Konfirmasi hapus rekomendasi produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="deleteProductRecommendation" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-body m-3">
                    <p class="mb-0">Apakah anda yakin ingin menghapus produk ini dari rekomendasi produk</p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Hapus</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
