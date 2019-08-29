@extends('layouts.child')

@section('fixed-content')
<h3>Dashboard</h3>
<hr>

<div class="row">

    <div class="col">
        <div id="accordion" class="card">
            <div class="card-body">
                <h5 class="card-title">Bids by Status</h5>
                <ul class="list-group">

                    @foreach ($bids as $status => $bidGrp )
                    <li class="list-group-item d-flex justify-content-between align-items-center" data-toggle="collapse"
                        data-target="#{{$status}}-collapse">
                        {{ str_replace( '_', ' ', ucfirst( $status ) ) }}
                        <span class="badge badge-primary badge-pill">{{ count($bidGrp) }}</span>
                    </li>
                    <div id="{{$status}}-collapse" class="collapse" aria-labelledby="headingOne"
                        data-parent="#accordion">

                        <table class="table table-list">
                            <tbody>
                                @foreach ($bidGrp as $bid)
                                <tr>
                                    <td class="link">
                                        <a class="pl-5 btn text-left" href="/bids/{{$bid->id}}">{{ $bid->name }} | {{ $bid->organization->name }}</a>
                                    </td>
                                    <td>
                                        <form action="/bids/{{$bid->id}}" method="POST">
                                            @csrf
                                            @method('patch')
                                            <div class="row">
                                                <div class="form-group col">
                                                    <select class="form-control" name="status_id">
                                                        @foreach (App\Bid::$statuses as $status)
                                                            <option {{ $bid->status_id == $status ? 'selected' : '' }} value="{{$status}}">{{ str_replace( '_', ' ', ucfirst($status) ) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                
                                                <div class="form-group col fitToContent">
                                                    <button type="submit" class="btn btn-success"><i class="fas fa-pen-square"></i></button>
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

    {{-- <div class="col-6">
        <div id="accordion" class="card">
            <div class="card-body">
                <h5 class="card-title">Bids for Follow-up</h5>
                <table class="table m-0">
                    <tbody>
                        @foreach ($followUpBids as $bid => $followUps)
                        <tr>
                            <td class="link">
                                <a class="btn text-left" href="/bids/{{$bid}}">{{ $bid }}</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

</div>

@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection