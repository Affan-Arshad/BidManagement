{{-- Edit Proposal Modal --}}
<div class="modal" tabindex="-1" role="dialog" id="editProposalModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title">Edit proposal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="hidden" name="lot_id" class="lot_id">
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" name="name" class="name form-control" placeholder="Name"
                                id="bidder-modal" required>
                        </div>

                        <div class="form-group col">
                            <input type="text" name="price" class="price form-control input-numeric-modal"
                                placeholder="Price" required>
                        </div>

                        <div class="form-group col">
                            <input type="integer" name="duration_days" class="duration form-control"
                                placeholder="Duration" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>