@extends('layouts.child')

@section('fixed-content')
<h3>Change <a href="/bids/{{ $bid->id }}">{{ $bid->name }}</a> to Ready for Submission</h3>
<hr>
<form action="/bids/{{ $bid->id }}" method="POST">
    @csrf
    @method('patch')
    <input type="hidden" name="redirect" value="/bids/{{ $bid->id }}">

    <div class="form-group">
        <label>Estimated Cost (MVR)</label>
        <input required type="text" class="form-control input-numeric" name="cost" value="{{ $bid->cost }}">
    </div>

    <div class="form-group">
        <label>Duration (Days)</label>
        <input type="text" class="form-control input-numeric" name="duration" value="{{ $bid->duration }}">
    </div>

    <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status_id">
            @foreach (App\Bid::$statuses as $status => $color)
            <option {{ 'ready_for_submission' == $status ? 'selected' : '' }} value="{{ $status }}">
                {{ str_replace( '_', ' ', ucwords($status) ) }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection