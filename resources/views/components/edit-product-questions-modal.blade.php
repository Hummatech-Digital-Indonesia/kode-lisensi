<div class="modal fade" id="editQuestionModal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static"
     data-bs-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Pertanyaan Produk</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" id="editQuestions" method="POST" class="submitEditQuestions">
                @method("PATCH")
                @csrf
                <div class="modal-body m-3">
                    <div id="divUsername" class="mb-4 row align-items-center">
                        <label class="form-label-title col-sm-3 mb-0">Pertanyaan <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input id="editQuestion" autocomplete="off" name="question" class="form-control" type="text"
                                   placeholder="Apakah produk ini legal?">
                        </div>
                    </div>
                    <div id="divPassword" class="mb-4 row align-items-center">
                        <label class="form-label-title col-sm-3 mb-0">Jawaban <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input id="editAnswer" autocomplete="off" name="answer" class="form-control" type="text"
                                   placeholder="Ya ini legal">
                        </div>
                    </div>

                    <div class="mb-4 row align-items-center" style="display: none">
                        <label class="form-label-title col-sm-3 mb-0">Jawaban <span
                                class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input id="editQuestionId" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-secondary">Update</button>
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Batal</button>
                </div>
            </form>
        </div>
    </div>
</div>
