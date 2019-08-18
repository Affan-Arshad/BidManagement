@extends('layouts.child')

@section('fixed-content')
    <h3>Bids</h3>
    <a class="btn btn-success" href="/bids/create?org=3">Add new Bid</a>
    <hr>
    <table data-toggle="table" data-search="true">
        <thead>
            <tr>
                <th>Name</th>
                <th class="fitToContent">Organization</th>
                <th class="fitToContent">Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bids as $bid)
            <tr>
                <td class="link">
                    <a class="btn text-left" href="/bids/{{$bid->id}}">{{$bid->name}}</a>
                </td>
                <td class="fitToContent link">
                    <a class="btn text-left" href="/organizations/{{$bid->organization->id}}">{{$bid->organization->name}}</a>
                </td>
                <td class="link">
                    <a target="_blank" class="btn text-left" href="{{$bid->link}}">{{$bid->link}}</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan=2>
                    <a class="btn btn-success" href="/bids/create?org=3">Add new Bid</a>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection