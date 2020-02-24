@extends('layouts.child')

@section('fixed-content')
<h3>Change <a href="/bids/{{ $bid->id }}">{{ $bid->name }}</a> to Ongoing</h3>
<hr>
<form action="/bids/{{ $bid->id }}" method="POST">
    @csrf
    @method('patch')
    <input type="hidden" name="redirect" value="/bids/{{ $bid->id }}">

    <div class="form-group">
        <label>Agreement Date</label>
        <input required type="datetime-local" class="form-control" name="agreement_date"
            value="{{ inputDateFormat($bid->agreement_date) }}">
    </div>

    <div class="form-group">
        <label>Agreement No.</label>
        <input required type="text" class="form-control" name="agreement_no" value="{{ $bid->agreement_no }}">
    </div>

    <div class="form-group">
        <label>Duration (Days)</label>
        <input type="text" class="form-control input-numeric" name="duration" value="{{ $bid->duration }}">
    </div>

    <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status_id">
            @foreach (App\Bid::$statuses as $status => $color)
            <option {{ 'ongoing' == $status ? 'selected' : '' }} value="{{ $status }}">
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