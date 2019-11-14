<section class="mt-3">
    <h5>Notes</h5>

    <hr>

    <form action="/bids/{{ $bid->id }}/notes" method="POST">
        @csrf
        <input type="hidden" name="bid_id" value="{{ $bid->id }}">

        <div class="row">
                
            <div class="form-group col">
                <input type="text" name="content" class="form-control" placeholder="Note" required>
            </div>

            <div class="form-group col fitToContent">
                <button type="submit" class="btn btn-success" id="addBidderBtn"><i class="fas fa-plus"></i></button>
            </div>
        </div>
    </form>

    <hr>

    <table data-toggle="table" data-mobile-responsive="true" class="table-counter">
        <thead>
            <tr>
                <th>#</th>
                <th data-sortable="true">Note</th>
                <th data-sortable="true">Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bid->notes->reverse() as $note)
            <tr>
                <td class="fitToContent"></td>
                <td class="note">{{ $note->content }}</td>
                <td class="date fitToContent">{{ $note->created_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</section>