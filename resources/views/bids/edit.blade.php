@extends('layouts.child')

@section('fixed-content')
    <h3>Edit Bid</h3>
    <hr>
    <form action="/bids/{{$bid->id}}" method="POST">
        @csrf
        @method('patch')

        <div class="form-group">
            <label>Organization</label>
            <select name="organization_id" class="form-control">
            @foreach($organizations as $id => $name)
                <option value="{{$id}}" @if($id == $bid->organization->id) selected @endif>{{$name}}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Iulaan No.</label>
            <input type="text" class="form-control" name="iulaan_no" value="{{$bid->iulaan_no}}">
        </div>

        <div class="form-group">
            <label>Link</label>
            <input type="text" class="form-control" name="link" value="{{$bid->link}}">
        </div>

        <div class="row">
            <div class="form-group col">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{$bid->name}}">
            </div>

            <div class="form-group col">
                <label>Category</label>
                <input type="text" class="form-control" name="category" value="{{$bid->category}}">
            </div>
        </div>

        <div class="form-group">
            <label>Estimated Cost (MVR)</label>
            <input type="text" class="form-control input-numeric" name="cost" value="{{$bid->cost}}">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="datetime-local" class="form-control" name="date" value="{{$bid->getDate()}}">
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