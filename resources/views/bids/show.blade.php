@extends('layouts.child')

@section('fixed-content')
<section>
    <h3>{{$bid->name}} <a class="btn text-warning" href="/bids/{{$bid->id}}/edit"><i class="fas fa-edit"></i></a></h3>
    <hr>

    <table class="table table-bordered bid">
        <tbody>
            <tr>
                <th class="fitToContent">Organization</th>
                <td colspan=3 class="link">
                    <a class="btn text-left"
                        href="/organizations/{{$bid->organization->id}}">{{$bid->organization->name}}</a>
                </td>
            </tr>
            <tr>
                <th>Iulaan No.</th>
                <td colspan=3>{{$bid->iulaan_no}}</td>
            </tr>
            <tr>
                <th>Link</th>
                <td colspan=3 class="link">
                    <a target="_blank" class="btn text-left" href="{{$bid->link}}">{{$bid->link}}</a>
                </td>
            </tr>
            <tr>
                <th class="fitToContent">Category</th>
                <td colspan=3>{{$bid->category}}</td>
            </tr>
            <tr>
                <th class="fitToContent">Estimated Cost (MVR)</th>
                <td colspan=3 class="auto-numeric">{{$bid->cost}}</td>
            </tr>
            <tr>
                <th class="fitToContent">Registration Start Date</th>
                <td>{{displayDateFormat($bid->registration_start_date)}}</td>
                <th class="fitToContent">Registration End Date</th>
                <td>{{displayDateFormat($bid->registration_end_date)}}</td>
            </tr>
            <tr>
                <th class="fitToContent">Information Date</th>
                <td>{{displayDateFormat($bid->info_date)}}</td>
                <th class="fitToContent">Submission Date</th>
                <td>{{displayDateFormat($bid->submission_date)}}</td>
            </tr>
            <tr>
                <th class="fitToContent">Agreement Date</th>
                <td>{{displayDateFormat($bid->agreement_date)}}</td>
                <th class="fitToContent">Extended Date</th>
                <td>{{displayDateFormat($bid->extended_date)}}</td>
            </tr>
            <tr>
                <th class="fitToContent">Duration</th>
                <td colspan=3>{{$bid->duration}}</td>
            </tr>
            <tr>
                <th class="fitToContent">Status</th>
                <td colspan=3>
                    @include('partials.changeStatus', [
                        $redirect = "/bids/$bid->id"
                    ])
                </td>
            </tr>
            <tr>
                <th class="fitToContent">Evaluation Criteria</th>
                <td colspan=3>
                    <form action="/bids/{{$bid->id}}/evaluations" method="POST">
                        @csrf
                        <div class="row">
                            <div class="form-group col">
                                <input type="text" name="criterion" class="form-control" placeholder="Criterion"
                                    id="criterion" required>
                            </div>

                            <div class="form-group col">
                                <input type="text" name="percentage" class="form-control" placeholder="Percentage"
                                    required>
                            </div>

                            <div class="form-group col fitToContent">
                                <button type="submit" class="btn btn-success"><i class="fas fa-plus"></i></button>
                            </div>
                        </div>
                    </form>

                    @if(count($bid->evaluations))
                    <table class="table table-bordered bidders">
                        <thead>
                            <tr>
                                <th>Criteria</th>
                                <th>Percentage</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($bid->evaluations as $evaluation)
                            <tr>
                                <td>{{$evaluation->criterion}}</td>
                                <td>{{$evaluation->percentage}}</td>
                                <td class="fitToContent">
                                    <a class="btn text-warning" data-toggle="modal" data-target="#editCriterion"
                                        onclick="editCriterion({{$evaluation}})"><i class="fas fa-edit"></i></a>
                                    <form class="d-inline-block"
                                        action="/bids/{{$bid->id}}/evaluations/{{$evaluation->id}}" method="POST"
                                        onsubmit="confirmDelete(event, '{{$evaluation->criterion}}')">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn text-danger"><i
                                                class="fas fa-trash"></i></button>
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
                <input type="text" name="name" class="form-control bidder" placeholder="Name" id="proposals" required>
            </div>

            <div class="form-group col">
                <input type="text" name="price" class="form-control input-numeric" placeholder="Price" required>
            </div>

            <div class="form-group col">
                <input type="integer" name="duration_days" class="form-control" placeholder="Duration" required>
            </div>

            <div class="form-group col fitToContent">
                <button type="submit" class="btn btn-success" id="addBidderBtn"><i class="fas fa-plus"></i></button>
            </div>
        </div>
    </form>

    @foreach ($bid->proposalsByLot as $lot => $proposals)
    @if($lot == "" && count($proposals))
    <table
    data-toggle="table"
    data-mobile-responsive="true" class="table-counter">
        <thead>
            <tr>
                <th>#</th>
                <th data-sortable="true">Name</th>
                <th data-sortable="true">Price</th>
                <th data-sortable="true">Duration (days)</th>
                <th data-sortable="true">Evaluation</th>
                <th class="fitToContent">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($proposals as $proposal)
            <tr class="proposal">
                <td class="fitToContent"></td>
                <td class="name">{{$proposal->bidder->name}}</td>
                <td class="price auto-numeric">{{$proposal->price}}</td>
                <td class="duration fitToContent">{{$proposal->duration_days}}</td>
                <td class="">{{$proposal->eval}}</td>
                <td class="fitToContent">
                    <a class="btn text-warning" data-toggle="modal" data-target="#editProposal"
                        onclick="editProposal({{$proposal}})"><i class="fas fa-edit"></i></a>
                    <form class="d-inline-block" action="/bids/{{$bid->id}}/proposals/{{$proposal->id}}" method="POST"
                        onsubmit="confirmDelete(event, 'Proposal by {{$proposal->bidder->name}}')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-danger"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
    @endforeach
</section>

<section class="mt-3">
    <h5>Lots <a class="btn btn-success text-light" data-toggle="modal" data-target="#addLot"
            onclick="addLot({{$bid->id}})"><i class="fas fa-plus"></i></a></h5>
    <hr>

    @foreach ($bid->lots as $lot)
    <div class="card mb-3">
        <div class="card-header">
            {{$lot->name}}
            <a class="btn text-warning" data-toggle="modal" data-target="#editLot" onclick="editLot({{$lot}})"><i
                    class="fas fa-edit"></i></a>
        </div>
        <div class="card-body">
            <form action="/bids/{{$bid->id}}/proposals" method="POST">
                @csrf
                <input type="hidden" name="lot_id" value="{{$lot->id}}">
                <div class="row">
                    <div class="form-group col">
                        <input id="lot{{$lot->id}}" type="text" name="name" class="form-control bidder" placeholder="Name" required>
                    </div>

                    <div class="form-group col">
                        <input type="text" name="price" class="form-control input-numeric" placeholder="Price" required>
                    </div>

                    <div class="form-group col">
                        <input type="integer" name="duration_days" class="form-control" placeholder="Duration" required>
                    </div>

                    <div class="form-group col fitToContent">
                        <button type="submit" class="btn btn-success" id="addBidderBtn"><i
                                class="fas fa-plus"></i></button>
                    </div>
                </div>
            </form>

            <table
            data-toggle="table"
            data-mobile-responsive="true" class="table-counter">
                <thead>
                    <tr>
                        <th>#</th>
                        <th data-sortable="true">Name</th>
                        <th data-sortable="true">Price</th>
                        <th data-sortable="true">Duration (days)</th>
                        <th data-sortable="true">Evaluation</th>
                        <th class="fitToContent">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if (isset($bid->proposalsByLot[$lot->id]))
                    @foreach($bid->proposalsByLot[$lot->id] as $proposal)
                    <tr class="proposal">
                        <td class="fitToContent"></td>
                        <td class="name">{{$proposal->bidder->name}}</td>
                        <td class="price auto-numeric">{{$proposal->price}}</td>
                        <td class="duration fitToContent">{{$proposal->duration_days}}</td>
                        <td class="">{{$proposal->eval}}</td>
                        <td class="fitToContent">
                            <a class="btn text-warning" data-toggle="modal" data-target="#editProposal"
                                onclick="editProposal({{$proposal}})"><i class="fas fa-edit"></i></a>
                            <form class="d-inline-block" action="/bids/{{$bid->id}}/proposals/{{$proposal->id}}"
                                method="POST"
                                onsubmit="confirmDelete(event, 'Proposal by {{$proposal->bidder->name}}')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn text-danger"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
</section>

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
                    <input type="hidden" name="lot_id" class="lot_id">
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" name="name" class="name form-control" placeholder="Name"
                                id="bidder-modal" required>
                        </div>

                        <div class="form-group col">
                            <input type="text" name="price" class="price form-control input-numeric-modal"
                                placeholder="Price" required>
                        </div>

                        <div class="form-group col">
                            <input type="integer" name="duration_days" class="duration form-control"
                                placeholder="Duration" required>
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
                            <input type="text" name="criterion" class="criterion form-control" placeholder="Criterion"
                                id="criterion-modal" required>
                        </div>

                        <div class="form-group col">
                            <input type="text" name="percentage" class="percentage form-control"
                                placeholder="Percentage" required>
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

{{-- Add Lot Modal --}}
<div class="modal" tabindex="-1" role="dialog" id="addLot">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-header">
                    <h5 class="modal-title">Add Lot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <input type="text" name="bid_id" class="bid_id form-control" hidden required>
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" name="name" class="form-control" placeholder="Lot Name" required>
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

{{-- Edit Lot Modal --}}
<div class="modal" tabindex="-1" role="dialog" id="editLot">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                @method('PATCH')
                <div class="modal-header">
                    <h5 class="modal-title">Edit Lot</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="row">
                        <div class="form-group col">
                            <input type="text" name="name" class="name form-control" placeholder="Lot Name" required>
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

@endsection

@section('additionalCSS')
<link rel="stylesheet" href="/css/awesomplete.css">
<link rel="stylesheet" href="/css/awesomplete.theme.css">
@endsection

@section('additionalJS')
<script src="/js/awesomplete.js"></script>
<script>
    // Focus on Inputs
        @isset($_GET['focus'])
        window.onload = function() {
            document.querySelector("#<?php echo $_GET['focus']; ?>").focus();
        }
        @endif

        // Autocomplete Bidders
        var inputs = document.querySelectorAll('.bidder');
        inputs.forEach(function (input) {
            new Awesomplete(input, {
                list: <?php echo json_encode($bidderNames, true); ?>,
            });
        });
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
            // Set Lot Id
            $('#editProposal .lot_id')[0].value = proposal.lot_id;
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

        // Add Lot
        function addLot(bid_id) {
            // Set Bid
            $('#addLot .bid_id')[0].value = bid_id;
            // Set Form Action
            $('#addLot form')[0].setAttribute('action', '/bids/'+bid_id+'/lots');
        }

        // Edit Lot
        function editLot(lot) {
            // Set Bid
            $('#editLot .name')[0].value = lot.name;
            // Set Form Action
            $('#editLot form')[0].setAttribute('action', '/bids/'+lot.bid_id+'/lots/'+lot.id);
        }
</script>
@endsection