@extends('child')

@section('fixed-content')
    <h3>{{$bid->name}}<a class="btn btn-primary float-right" href="/bids/{{$bid->id}}/edit">Edit</a></h3>
    <hr>

    <table class="table table-bordered bid">
        <tbody>
            <tr>
                <th class="fitToContent">Organization</th>
                <td>{{$bid->organization->name}}</td>
            </tr>
            <!-- <tr>
                <td>Name</td>
                <td>{{$bid->name}}</td>
            </tr> -->
            <tr>
                <th class="fitToContent">Category</th>
                <td>{{$bid->category}}</td>
            </tr>
            <tr>
                <th class="fitToContent">Estimated Cost (MVR)</th>
                <td class="auto-numeric">{{$bid->cost}}</td>
            </tr>
            <tr>
                <th class="fitToContent">Date</th>
                <td>{{$bid->dateDisplay()}}</td>
            </tr>
        </tbody>
    </table>

    
    <h5>Bidders</h5>
    <hr>

    <form action="/bids/{{$bid->id}}/bidders" method="POST" id="addBidderForm">
        @csrf
        <div class="row">
            <div class="form-group col">
                <input type="text" name="name" class="form-control" placeholder="Name" id="bidder">
            </div>

            <div class="form-group col">
                <input type="text" name="price" class="form-control auto-numeric" placeholder="Price">
            </div>

            <div class="form-group col">
                <input type="integer" name="duration_days" class="form-control" placeholder="Duration">
            </div>

            <div class="form-group col-1 w-100">
                <button type="submit" class="btn btn-success" id="addBidderBtn">Add</button>
            </div>
        </div>
    </form>

    <table class="table table-bordered bidders">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Duration (days)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bid->bidders as $bidder)
            <tr>
                <td>{{$bidder->name}}</td>
                <td class="auto-numeric">{{$bidder->pivot->price}}</td>
                <td>{{$bidder->pivot->duration_days}}</td>
                <td class="fitToContent">
                    <form action="/bids/{{$bid->id}}/bidders/{{$bidder->id}}" method="POST" id="del{{$bidder->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{$bidder->id}})">Delete</button>
                    </form>
                </td>
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
        // Autocomplete
        var list = <?php echo json_encode($list); ?>;
        var input = document.getElementById('bidder');
        var value = null;
        var bidder = new Awesomplete(input, {
            list: list,
        })
    </script>
@endsection