@extends('layouts.child')

@section('fixed-content')
<h3>Dashboard</h3>
<hr>

<div class="row" id="dashboard-cards">

    <div class="col-12 mb-5">

        <div class="d-none">
            <a href="{{ route('bidsToday') }}" class="btn btn-outline-primary btn-block">Notify Today Bids</a>
            <a href="{{ route('bidsTomorrow') }}" class="btn btn-outline-primary btn-block">Notify Tomorrow Bids</a>
        </div>

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

                    <table data-toggle="table" data-mobile-responsive="true">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Signed</th>
                                <th>Due</th>
                                <th>Extended</th>
                                <th>Duration</th>
                                <th>Remaining</th>
                                <th>LD</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bids->active as $bid)
                            <tr>
                                <td class="link">
                                    <a class="btn text-left" href="/bids/{{ $bid->id }}">{{ $bid->name }} |
                                        {{ $bid->organization->name }}
                                    </a>
                                </td>
                                <td>
                                    @include('partials.changeStatus', [
                                    $redirect = "/dashboard"
                                    ])
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
                                    @if($bid->remaining_days < 0 && is_object($bid->hikaa()))
                                        {{ $bid->remaining_days * 0.005 * $bid->hikaa()->price }}
                                    @endif
                                </td>
                                <td>
                                    <a href="#" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#viewNotesModal"
                                    onclick="viewNotesModal({{ $bid->notes }})">{{ count($bid->notes) }}</a>
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

                    <table data-toggle="table" data-mobile-responsive="true">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bids->submissions as $bid )
                            <tr>
                                <td class="link">
                                    <a class="btn text-left" href="/bids/{{ $bid->id }}">
                                        {{ $bid->name }} | {{ $bid->organization->name }}
                                    </a>
                                </td>
                                <td>
                                    @include('partials.changeStatus', [
                                    $redirect = "/dashboard"
                                    ])
                                </td>
                                <td>
                                    {{ displayDateFormat($bid->submission_date) }}
                                </td>
                                <td>
                                    <a href="#" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#viewNotesModal"
                                    onclick="viewNotesModal({{ $bid->notes }})">{{ count($bid->notes) }}</a>
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

                    <table data-toggle="table" data-mobile-responsive="true">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Registration starts</th>
                                <th>Registration ends</th>
                                <th>Prebid Meeting</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bids as $status => $bidGrp )
                            @if($status == 'prebid')
                            @foreach ($bidGrp as $bid)
                            <tr>
                                <td class="link">
                                    <a class="btn text-left" href="/bids/{{ $bid->id }}">{{ $bid->name }} |
                                        {{ $bid->organization->name }}</a>
                                </td>
                                <td>
                                    @include('partials.changeStatus', [
                                    $redirect = "/dashboard"
                                    ])
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
                                <td>
                                    <a href="#" class="badge badge-pill badge-primary" data-toggle="modal" data-target="#viewNotesModal"
                                    onclick="viewNotesModal({{ $bid->notes }})">{{ count($bid->notes) }}</a>
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
                                        <a class="btn text-left" href="/bids/{{ $bid->id }}">{{ $bid->name }} |
                                            {{ $bid->organization->name }}</a>
                                    </td>
                                    <td>
                                        @include('partials.changeStatus', [
                                        $redirect = "/dashboard"
                                        ])
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

    @include('partials.changeStatusModal', [
    $redirect => '/dashboard'
    ])
    
    @include('partials.viewNotesModal')

</div>

@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection