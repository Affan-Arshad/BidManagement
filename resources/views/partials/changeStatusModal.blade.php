<div class="modal" tabindex="-1" role="dialog" id="changeStatusModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <form method="POST">
                @csrf
                @method('patch')
                <input type="hidden" name="redirect" value="{{ $redirect }}">

                <div class="modal-header">
                    <h5 class="modal-title">Change Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="form-group col">

                            <select class="form-control" name="status_id">
                                @foreach (App\Models\Bid::$statuses as $status => $color)
                                <option
                                    value="{{ $status }}">
                                    {{ str_replace( '_', ' ', ucwords($status) ) }}
                                </option>
                                @endforeach
                            </select>

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