
{{-- Edit Criterion Modal --}}
<div class="modal" tabindex="-1" role="dialog" id="editCriterionModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form method="POST">
                    @method('PATCH')
                    <div class="modal-header">
                        <h5 class="modal-title">Edit criterion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        @csrf
                        <div class="row">
                            <div class="form-group col">
                                <input type="text" name="criterion" class="criterion form-control" placeholder="Criterion"
                                    id="criterion-modal" required>
                            </div>
    
                            <div class="form-group col">
                                <input type="text" name="percentage" class="percentage form-control"
                                    placeholder="Percentage" required>
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