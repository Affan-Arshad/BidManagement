@extends('child')

@section('fixed-content')
    <h3>{{$organization->name}}</h3>
    <hr>
    <table class="table organization-bids table-hover table-borderless">
        <thead>
            <tr>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($organization->bids as $bid)
            <tr>
                <td>{{$bid->name}}</td>
                <td class="fitToContent">
                    <a class="btn btn-info" href="/bids/{{$bid->id}}">View</a>
                    <a class="btn btn-warning" href="/bids/{{$bid->id}}/edit">Edit</a>
                    <form class="d-inline-block" action="/bids/{{$bid->id}}" method="POST" id="del{{$bid->id}}">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger" onclick="confirmDelete({{$bid->id}})">Delete</button>
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