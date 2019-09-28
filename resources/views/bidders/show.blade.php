@extends('layouts.child')

@section('fixed-content')
    <h3>{{$bidder->name}}</h3>
    <hr>
    <table
    data-toggle="table"
    data-mobile-responsive="true" data-search="true">
        <thead>
            <tr>
                <th>Bid Name</th>
                <th>Organization</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bidder->bids as $bid)
            <tr>
                <td class="link">
                    <a class="btn text-left" href="/bids/{{$bid->id}}">{{$bid->name}}</a>
                </td>
                <td class="fitToContent link">
                    <a class="btn text-left" href="/organizations/{{$bid->organization->id}}">{{$bid->organization->name}}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection