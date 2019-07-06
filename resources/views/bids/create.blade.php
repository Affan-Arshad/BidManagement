@extends('child')

@section('fixed-content')
    <h3>Create Bid</h3>
    <hr>
    <form action="/bids" method="POST">
        @csrf

        <div class="form-group">
            <label>Organization</label>
            <select name="organization_id" class="form-control">
            @foreach($organizations as $id => $name)
                <option value="{{$id}}" @if($id == $selected->id) selected @endif>{{$name}}</option>
            @endforeach
            </select>
        </div>

        <div class="row">
            <div class="form-group col">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group col">
                <label>Category</label>
                <input type="text" class="form-control" name="category">
            </div>
        </div>

        <div class="form-group">
            <label>Estimated Cost (MVR)</label>
            <input type="text" class="form-control" name="cost">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="datetime-local" class="form-control" name="date">
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