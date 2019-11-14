@extends('layouts.child')

@section('fixed-content')
    <h3>Add Evaluation to {{ $bid->name }}</h3>
    <hr>
    <form action="/bids/{{ $bid->id }}/evaluations" method="POST">
        @csrf

        <div class="row">
            <div class="form-group col">
                <label>Criterion</label>
                <input type="text" class="form-control" name="criterion[]">
            </div>

            <div class="form-group col">
                <label>Percentage</label>
                <input type="text" class="form-control" name="percentage[]">
            </div>
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