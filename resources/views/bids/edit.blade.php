@extends('layouts.child')

@section('fixed-content')
    <h3>Edit <a href="/bids/{{$bid->id}}">{{$bid->name}}</a></h3>
    <hr>
    <form action="/bids/{{$bid->id}}" method="POST">
        @csrf
        @method('patch')
        <input type="hidden" name="redirect" value="/bids/{{$bid->id}}">

        <div class="form-group">
            <label>Organization</label>
            <input type="text" name="organization" id="organization" class="form-control" value="{{$bid->organization->name}}" />
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
            <label>Info Date</label>
            <input type="datetime-local" class="form-control" name="info_date" value="{{ inputDateFormat($bid->info_date) }}">
        </div>

        <div class="form-group">
            <label>Submission Date</label>
            <input type="datetime-local" class="form-control" name="submission_date" value="{{ inputDateFormat($bid->submission_date) }}">
        </div>

        <div class="form-group">
            <label>Agreement Date</label>
            <input type="datetime-local" class="form-control" name="agreement_date" value="{{ inputDateFormat($bid->agreement_date) }}">
        </div>

        <div class="form-group">
            <label>Duration</label>
            <input type="text" class="form-control input-numeric" name="duration" value="{{$bid->duration}}">
        </div>

        <div class="form-group">
            <label>Status</label>
            <select class="form-control" name="status_id">
                @foreach (App\Bid::$statuses as $status)
                    <option {{ $bid->status_id == $status ? 'selected' : '' }} value="{{$status}}">{{ str_replace( '_', ' ', ucfirst($status) ) }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>
@endsection

@section('additionalCSS')
    <link rel="stylesheet" href="/css/awesomplete.css">
    <link rel="stylesheet" href="/css/awesomplete.theme.css">
@endsection

@section('additionalJS')
    <script src="/js/awesomplete.js"></script>
    <script>
        // Autocomplete Organization
        var input = document.getElementById('organization');
        new Awesomplete(input, {
            list: <?php echo json_encode($organizationNames, true); ?>,
        })

        // Autocomplete Category
        input = document.getElementById('category');
        new Awesomplete(input, {
            list: <?php echo json_encode($categories, true); ?>,
        })
    </script>
@endsection