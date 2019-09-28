@extends('layouts.child')

@section('fixed-content')
    <h3>{{$organization->name}} <a class="btn text-warning" href="/organizations/{{$organization->id}}/edit"><i class="fas fa-edit"></i></a></h3>
    <hr>
    <table
    data-toggle="table"
    data-mobile-responsive="true" data-search="true">
        <thead>
            <tr>
                <th>Name</th>
                <th class="fitToContent">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($organization->bids as $bid)
            <tr>
                <td class="link">
                    <a class="btn text-left" href="/bids/{{$bid->id}}">{{$bid->name}}</a>
                </td>
                <td class="fitToContent">
                    <a class="btn text-warning" href="/bids/{{$bid->id}}/edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form class="d-inline-block" action="/bids/{{$bid->id}}" method="POST" onsubmit="confirmDelete(event, '{{$bid->name}}')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn text-danger">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan=2>
                    <a class="btn btn-success" href="/bids/create?org={{$organization->id}}">Add new Bid</a>
                </td>
            </tr>
        </tfoot>
    </table>
@endsection

@section('additionalCSS')
@endsection

@section('additionalJS')
@endsection