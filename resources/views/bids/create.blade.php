@extends('layouts.child')

@section('fixed-content')
    <h3>Create Bid</h3>
    <hr>
    <form action="/bids" method="POST">
        @csrf

        <div class="form-group">
            <label>Organization</label>
            <input required type="text" name="organization" id="organization" class="form-control" value="{{ $organization }}" />
        </div>

        <div class="row">
            <div class="form-group col">
                <label>Iulaan No.</label>
                <input type="text" class="form-control" name="iulaan_no" value="{{ $iulaan_no }}">
            </div>
    
            <div class="form-group col">
                <label>Link</label>
                <input type="text" class="form-control" name="link" value="{{ $link }}">
            </div>
        </div>

        <div class="row">
            <div class="form-group col">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ $name }}" required>
            </div>

            <div class="form-group col">
                <label>Category</label>
                <input type="text" class="form-control" name="category" id="category" required>
            </div>
        </div>

        <div class="div">
            @foreach(explode('.', $dates) as $date)
                <div>{{ $date }}</div>
            @endforeach
        </div>

        <div class="form-group">
            <label>Info Date</label>
            <input type="datetime-local" class="form-control" name="info_date">
        </div>

        <div class="form-group">
            <label>Submission Date</label>
            <input type="datetime-local" class="form-control" name="submission_date" required >
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
        var input = document.getElementById('category');
        new Awesomplete(input, {
            list: <?php echo json_encode($categories, true); ?>,
        })
    </script>
@endsection