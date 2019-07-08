@extends('layouts.child')

@section('fixed-content')
    <section>
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
                <tr>
                    <th class="fitToContent">Evaluation Criteria</th>
                    <td>
                        <form action="/bids/{{$bid->id}}/evaluations" method="POST">
                            @csrf
                            <div class="row">
                                <div class="form-group col">
                                    <input type="text" name="criterion" class="form-control" placeholder="Criterion" id="criterion" required>
                                </div>

                                <div class="form-group col">
                                    <input type="text" name="percentage" class="form-control" placeholder="Percentage" required>
                                </div>

                                <div class="form-group col fitToContent">
                                    <button type="submit" class="btn btn-success" id="addBidderBtn">Add</button>
                                </div>
                            </div>
                        </form>

                        @if(count($bid->evaluations))
                        <table class="table table-bordered bidders">
                            <thead>
                                <tr>
                                    <th>Criteria</th>
                                    <th>Percentage</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bid->evaluations as $evaluation)
                                <tr>
                                    <td>{{$evaluation->criterion}}</td>
                                    <td>{{$evaluation->percentage}}</td>
                                    <td class="fitToContent">
                                        <form action="/bids/{{$bid->id}}/evaluations/{{$evaluation->id}}" method="POST" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <section>
        <h5>Bidders</h5>
        <hr>

        <form action="/bids/{{$bid->id}}/bidders" method="POST" id="addBidderForm">
            @csrf
            <div class="row">
                <div class="form-group col">
                    <input type="text" name="name" class="form-control" placeholder="Name" id="bidder" required>
                </div>

                <div class="form-group col">
                    <input type="text" name="price" class="form-control auto-numeric" placeholder="Price" required>
                </div>

                <div class="form-group col">
                    <input type="integer" name="duration_days" class="form-control" placeholder="Duration" required>
                </div>

                <div class="form-group col fitToContent">
                    <button type="submit" class="btn btn-success" id="addBidderBtn">Add</button>
                </div>
            </div>
        </form>

        @if(count($bid->bidders))
        <table class="table table-bordered bidders">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Duration (days)</th>
                    <th>Evaluation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bid->bidders as $bidder)
                <tr>
                    <td>{{$bidder->name}}</td>
                    <td class="auto-numeric">{{$bidder->pivot->price}}</td>
                    <td>{{$bidder->pivot->duration_days}}</td>
                    <td>{{$bidder->eval}}</td>
                    <td class="fitToContent">
                        <form action="/bids/{{$bid->id}}/bidders/{{$bidder->id}}" method="POST" onsubmit="confirmDelete(event)">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </section>
@endsection

@section('additionalCSS')
    <link rel="stylesheet" href="/css/awesomplete.css">
    <link rel="stylesheet" href="/css/awesomplete.theme.css">
@endsection

@section('additionalJS')
    <script src="/js/awesomplete.js"></script>
    <script>
        // Autocomplete Bidders
        var list = <?php echo json_encode($bidderNames); ?>;
        var input = document.getElementById('bidder');
        new Awesomplete(input, {
            list: list,
        })

        // Autocomplete Criteria
        list = <?php echo json_encode($criteriaNames); ?>;
        input = document.getElementById('criterion');
        new Awesomplete(input, {
            list: list,
        })
    </script>
@endsection