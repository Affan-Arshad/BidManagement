@extends('layouts.child')

@section('fixed-content')
<h3>Dashboard</h3>
<hr>

<div class="row" id="dashboard-cards">

    <div class="col-12 mb-5">
        
        <a href="{{route('bidsToday')}}" class="btn btn-outline-primary btn-block">Notify Today Bids</a>
        <a href="{{route('bidsTomorrow')}}" class="btn btn-outline-primary btn-block">Notify Tomorrow Bids</a>

        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#Ongoing-collapse">
                <h5 class="mb-0">Ongoing Bids
                    <span class="badge badge-primary float-right">
                        {{ (isset($bids->active) ? count($bids->active) : 0) }}
                    </span>
                </h5>
            </div>
            <div class="card-body collapse" id="Ongoing-collapse" data-parent="#dashboard-cards">
                <ul class="list-group">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Cost</th>
                                <th>Proposed</th>
                                <th>Signed</th>
                                <th>Due</th>
                                <th>Extended</th>
                                <th>Duration</th>
                                <th>Remaining</th>
                                <th>LD</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bids->active as $bid)
                            <tr>
                                <td class="link">
                                    <a class="btn text-left" href="/bids/{{$bid->id}}">{{ $bid->name }} |
                                        {{ $bid->organization->name }}
                                    </a>
                                </td>
                                <td>
                                    {{ str_replace( '_', ' ', ucwords( $bid->status_id ) ) }}
                                </td>
                                <td class="auto-numeric">
                                    {{ ($bid->cost) }}
                                </td>
                                @if($bid->hikaa())
                                <td class="auto-numeric">

                                    {{ $bid->price = $bid->hikaa()->price }}
                                @else
                                <td>
                                    {{ $bid->price = 0 }}
                                    No Proposal By Hikaa
                                @endif
                                </td>
                                <td>
                                    {{ displayDateFormat($bid->agreement_date) }}
                                </td>
                                <td>
                                    {{ displayDateFormat($bid->due_date) }}
                                </td>
                                <td>
                                    {{ displayDateFormat($bid->extended_date) }}
                                </td>
                                <td>
                                    {{ $bid->duration }}
                                </td>
                                <td>
                                    {{ $bid->remaining_days }}
                                </td>
                                <td class="auto-numeric">
                                    @if($bid->remaining_days < 0)
                                    {{ $bid->remaining_days * 0.005 * $bid->price }}
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </ul>
            </div>
        </div>
    </div>

    <div class="col-12 mb-5">
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#submissions-collapse">
                <h5 class="mb-0">
                    Upcoming Submissions
                    <span class="badge badge-primary float-right">
                        {{ count($bids->submissions) }}
                    </span>
                </h5>
            </div>
            <div class="card-body collapse" id="submissions-collapse" data-parent="#dashboard-cards">
                <ul class="list-group">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bids->submissions as $bid )
                            <tr>
                                <td class="link">
                                    <a class="btn text-left" href="/bids/{{$bid->id}}">
                                        {{ $bid->name }} | {{ $bid->organization->name }}
                                    </a>
                                </td>
                                <td>
                                    <span class="badge badge-{{$bid->status_color}}">{{ str_replace( '_', ' ', ucwords( $bid->status_id ) ) }}</span>
                                </td>
                                <td>
                                    {{ displayDateFormat($bid->submission_date) }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </ul>
            </div>
        </div>
    </div>

    <div class="col-12 mb-5">
        <div class="card">
            <div class="card-header" data-toggle="collapse" data-target="#infos-collapse">
                <h5 class="mb-0">
                    Upcoming Infos
                    <span class="badge badge-primary float-right">
                        {{ (isset($bids['prebid']) ? count($bids['prebid']) : 0) }}
                    </span>
                </h5>
            </div>
            <div class="card-body collapse" id="infos-collapse" data-parent="#dashboard-cards">
                <ul class="list-group">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Registration starts</th>
                                <th>Registration ends</th>
                                <th>Prebid Meeting</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bids as $status => $bidGrp )
                            @if($status == 'prebid')
                            @foreach ($bidGrp as $bid)
                            <tr>
                                <td class="link">
                                    <a class="btn text-left" href="/bids/{{$bid->id}}">{{ $bid->name }} |
                                        {{ $bid->organization->name }}</a>
                                </td>
                                <td>
                                    {{ displayDateFormat($bid->registration_start_date) }}
                                </td>
                                <td>
                                    {{ displayDateFormat($bid->registration_end_date) }}
                                </td>
                                <td>
                                    {{ displayDateFormat($bid->info_date) }}
                                </td>
                            </tr>
                            @endforeach
                            @endif
                            @endforeach
                        </tbody>
                    </table>

                </ul>
            </div>
        </div>
    </div>

    <div class="col-12 mb-5">
        <div id="accordion" class="card">
            <div class="card-header" data-toggle="collapse" data-target="#status-collapse">
                <h5 class="mb-0">Bids by Status</h5>
            </div>
            <div class="card-body collapse" id="status-collapse" data-parent="#dashboard-cards">
                <ul class="list-group">

                    @foreach ($bids as $status => $bidGrp )
                    <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse"
                        data-target="#{{ str_replace( '/', '-', $status) }}-collapse">
                        {{ str_replace( '_', ' ', ucwords( $status ) ) }}
                        <span class="badge badge-primary badge-pill">{{ count($bidGrp) }}</span>
                    </li>
                    <div id="{{ str_replace( '/', '-', $status) }}-collapse" class="collapse" data-parent="#accordion">

                        <table class="table table-list">
                            <tbody>
                                @foreach ($bidGrp as $bid)
                                <tr>
                                    <td class="link">
                                        <a class="btn text-left" href="/bids/{{$bid->id}}">{{ $bid->name }} |
                                            {{ $bid->organization->name }}</a>
                                    </td>
                                    <td>
                                        <form action="/bids/{{$bid->id}}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <input type="hidden" name="redirect" value="/dashboard">

                                            <div class="row">
                                                <div class="form-group col m-0">
                                                    <select class="form-control" name="status_id">
                                                        @foreach (App\Bid::$statuses as $status)
                                                        <option {{ $bid->status_id == $status ? 'selected' : '' }}
                                                            value="{{$status}}">
                                                            {{ str_replace( '_', ' ', ucwords($status) ) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group col fitToContent m-0">
                                                    <button type="submit" class="btn btn-success"><i
                                                            class="fas fa-pen-square"></i></button>
                                                </div>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</div>

@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection