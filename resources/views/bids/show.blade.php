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
                <tr>
                    <th>Iulaan No.</th>
                    <td>{{$bid->iulaan_no}}</td>
                </tr>
                <tr>
                    <th>Link</th>
                    <td class="link">
                        <a target="_blank" class="btn text-left" href="{{$bid->link}}">{{$bid->link}}</a>
                    </td>
                </tr>
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
                                    <button type="submit" class="btn btn-success">Add</button>
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
                                        <a class="btn btn-warning" data-toggle="modal" data-target="#editCriterion" onclick="editCriterion({{$evaluation}})">Edit</a>
                                        <form class="d-inline-block" action="/bids/{{$bid->id}}/evaluations/{{$evaluation->id}}" method="POST" onsubmit="confirmDelete(event)">
                                            @csrf
                                            @method("DELETE")
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
        <h5>Proposals</h5>
        <hr>

        <form action="/bids/{{$bid->id}}/proposals" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col">
                    <input type="text" name="name" class="form-control" placeholder="Name" id="bidder" required>
                </div>

                <div class="form-group col">
                    <input type="text" name="price" class="form-control input-numeric" placeholder="Price" required>
                </div>

                <div class="form-group col">
                    <input type="integer" name="duration_days" class="form-control" placeholder="Duration" required>
                </div>

                <div class="form-group col fitToContent">
                    <button type="submit" class="btn btn-success" id="addBidderBtn">Add</button>
                </div>
            </div>
        </form>

        @if(count($bid->proposals))
        <table class="table table-bordered bidders">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th class="">Duration (days)</th>
                    <th class="">Evaluation</th>
                    <th class="fitToContent">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bid->proposals as $proposal)
                <tr class="proposal">
                    <td class="name">{{$proposal->bidder->name}}</td>
                    <td class="price auto-numeric">{{$proposal->price}}</td>
                    <td class="duration">{{$proposal->duration_days}}</td>
                    <td class="">{{$proposal->eval}}</td>
                    <td class="fitToContent">
                        <a class="btn btn-warning" data-toggle="modal" data-target="#editProposal" onclick="editProposal({{$proposal}})">Edit</a>
                        <form class="d-inline-block" action="/bids/{{$bid->id}}/proposals/{{$proposal->id}}" method="POST" onsubmit="confirmDelete(event)">
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

        {{-- Edit Proposal Modal --}}
        <div class="modal" tabindex="-1" role="dialog" id="editProposal">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="POST">
                        @method('PATCH')
                        <div class="modal-header">
                            <h5 class="modal-title">Edit proposal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="row">
                                <div class="form-group col">
                                    <input type="text" name="name" class="name form-control" placeholder="Name" id="bidder-modal" required>
                                </div>
                
                                <div class="form-group col">
                                    <input type="text" name="price" class="price form-control input-numeric-modal" placeholder="Price" required>
                                </div>
                
                                <div class="form-group col">
                                    <input type="integer" name="duration_days" class="duration form-control" placeholder="Duration" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        {{-- Edit Criterion Modal --}}
        <div class="modal" tabindex="-1" role="dialog" id="editCriterion">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <form method="POST">
                        @method('PATCH')
                        <div class="modal-header">
                            <h5 class="modal-title">Edit criterion</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            @csrf
                            <div class="row">
                                <div class="form-group col">
                                    <input type="text" name="criterion" class="criterion form-control" placeholder="Criterion" id="criterion-modal" required>
                                </div>

                                <div class="form-group col">
                                    <input type="text" name="percentage" class="percentage form-control" placeholder="Percentage" required>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </section>
@endsection

@section('additionalCSS')
    <link rel="stylesheet" href="/css/awesomplete.css">
    <link rel="stylesheet" href="/css/awesomplete.theme.css">
@endsection

@section('additionalJS')
    <script src="/js/awesomplete.js"></script>
    <script>
        // Focus on Inputs
        window.onload = function() {
            document.querySelector("<?php echo $focus; ?>").focus();
        }

        // Autocomplete Bidders
        var input = document.getElementById('bidder');
        new Awesomplete(input, {
            list: <?php echo json_encode($bidderNames, true); ?>,
        })
        var input = document.getElementById('bidder-modal');
        new Awesomplete(input, {
            list: <?php echo json_encode($bidderNames, true); ?>,
        })

        // Autocomplete Criteria
        input = document.getElementById('criterion');
        new Awesomplete(input, {
            list: <?php echo json_encode($criteriaNames, true); ?>,
        })
        input = document.getElementById('criterion-modal');
        new Awesomplete(input, {
            list: <?php echo json_encode($criteriaNames, true); ?>,
        })

        // Edit Proposal
        function editProposal(proposal) {
            // Set Name
            $('#editProposal .name')[0].value = proposal.bidder.name;
            // Set Price
            $('#editProposal .price')[0].value = proposal.price;
            // Format Price
            new Cleave('.input-numeric-modal', {
                numeral: true,
                numeralThousandsGroupStyle: 'thousand'
            });
            // Set Duration
            $('#editProposal .duration')[0].value = proposal.duration_days;
            // Set Form Action
            $('#editProposal form')[0].setAttribute('action', '/bids/'+proposal.bid_id+'/proposals/'+proposal.id);
        }

        // Edit Criterion
        function editCriterion(evaluation) {
            // Set Criterion
            $('#editCriterion .criterion')[0].value = evaluation.criterion;
            // Set Percentage
            $('#editCriterion .percentage')[0].value = evaluation.percentage;
            // Set Form Action
            $('#editCriterion form')[0].setAttribute('action', '/bids/'+evaluation.bid_id+'/evaluations/'+evaluation.id);
        }
    </script>
@endsection