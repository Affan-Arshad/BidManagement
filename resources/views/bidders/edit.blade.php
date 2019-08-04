@extends('layouts.child')

@section('fixed-content')
    <h3>Edit {{$bidder->name}}</h3>
    <hr>
    <form action="/bidders/{{$bidder->id}}" method="POST">
        @csrf
        @method('patch')

        <div class="row">
            <div class="form-group col">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$bidder->name}}">
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