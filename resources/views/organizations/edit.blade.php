@extends('layouts.child')

@section('fixed-content')
    <h3>Edit Organization</h3>
    <hr>
    <form action="/organizations/{{ $organization->id }}" method="POST">
        @csrf
        @method('patch')
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ $organization->name }}" >
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