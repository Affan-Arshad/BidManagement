
<form action="{{$action}}" method="POST">
    @csrf
    @method('patch')
    <input type="hidden" name="redirect" value="{{$redirect}}">

    <div class="row">
        <div class="form-group col m-0">
            <select class="form-control" name="status_id">
                @foreach (App\Bid::$statuses as $status)
                <option {{ $bid->status_id == $status ? 'selected' : '' }}
                    value="{{$status}}">
                    {{ str_replace( '_', ' ', ucwords($status) ) }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col fitToContent m-0">
            <button type="submit" class="btn btn-success"><i
                    class="fas fa-pen-square"></i></button>
        </div>
    </div>
</form>