@extends('child')

@section('fixed-content')
    <h3>{{$bid->name}}</h3>
    <hr>

    <table class="table table-bordered bid">
        <tbody>
            <tr>
                <td>Organization</td>
                <td>{{$bid->organization->name}}</td>
            </tr>
            <!-- <tr>
                <td>Name</td>
                <td>{{$bid->name}}</td>
            </tr> -->
            <tr>
                <td>Category</td>
                <td>{{$bid->category}}</td>
            </tr>
            <tr>
                <td>Estimated Cost (MVR)</td>
                <td>{{$bid->cost}}</td>
            </tr>
            <tr>
                <td>Date</td>
                <td>{{$bid->date}}</td>
            </tr>
        </tbody>
    </table>

    
    <h5>Bidders</h5>
    <hr>

    <form action="/bidders" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col">
                <input type="text" name="bidder_id" class="awesomplete form-control" placeholder="Name">
            </div>

            <div class="form-group col">
                <input type="double" name="price" class="form-control" placeholder="Price">
            </div>

            <div class="form-group col">
                <input type="integer" name="duration_days" class="form-control" placeholder="Duration">
            </div>

            <div class="form-group col-1 w-100">
                <button type="submit" class="btn btn-success">Add</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered bidders">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Duration (days)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bid->bidders as $bidder)
            <tr>
                <td>{{$bidder->name}}</td>
                <td>{{$bidder->price}}</td>
                <td>{{$bidder->duration_days}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection

@section('additionalCSS')
    <link rel="stylesheet" href="/css/awesomplete.css">
    <link rel="stylesheet" href="/css/awesomplete.theme.css">
@endsection

@section('additionalJS')
    <script src="/js/awesomplete.js"></script>
    <script>
        var bidderIDs = {{json_encode($bid->bidders)}};
        console.log(bidderIDs);
        var input = document.getElementByID('bidders');
        // var bidders = new Awesomplete(input, ['list' => ])
    </script>
@endsection