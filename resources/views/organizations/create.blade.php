@extends('layouts.child')

@section('fixed-content')
    <h3>Create Organization</h3>
    <hr>
    <form action="/organizations" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name">
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